$(function () {
    "use strict";

    // Initialize CKEditor for the answer textarea
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('answer');
    }
});

$(document).ready(function () {
    loadPostOptions();

    if (id && id > 0) {
        getQnaById(id);
    }

    // Initialize character count on page load for question
    updateCharCount('question', 'questionCharCount');

    // Update question char count on input
    $('#question').on('input', function () {
        updateCharCount('question', 'questionCharCount');
    });

    // For CKEditor answer field character count
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.instances['answer'].on('contentDom', function () {
            updateCkEditorCharCount('answer', 'answerCharCount');

            this.document.on('keyup', function () {
                updateCkEditorCharCount('answer', 'answerCharCount');
            });
        });

        // Also initialize count when data is set (for editing existing QnA)
        if (CKEDITOR.instances['answer']) {
            updateCkEditorCharCount('answer', 'answerCharCount');
        }
    } else {
        // If CKEditor not loaded fallback to textarea input
        updateCharCount('answer', 'answerCharCount');
        $('#answer').on('input', function () {
            updateCharCount('answer', 'answerCharCount');
        });
    }

    // Cancel button → Go back to Q&A list
    $('#cancelBtn').click(function () {
        window.location.href = base_url + 'blog/qna';
    });

    // Form submission
    $('#updateQnaForm').on('submit', function (e) {
        e.preventDefault();

        // Update CKEditor textarea before submit
        if (typeof CKEDITOR !== 'undefined') {
            for (const instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
        }

        // Basic validation
        if (!$('#post_id').val()) {
            swal("Validation Error", "Please select a post.", "error");
            return;
        }
        if (!$('#question').val().trim()) {
            swal("Validation Error", "Please enter a question.", "error");
            return;
        }
        if (!$('#answer').val().trim()) {
            swal("Validation Error", "Please enter an answer.", "error");
            return;
        }

        const formData = new FormData(this);

        $.ajax({
            url: base_url + 'update-qna/' + id,
            type: 'POST',
            headers: { "Authorization": token },
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response) {
                if (response.status === 200) {
                    swal("Success!", response.message, "success")
                        .then(() => window.location.href = base_url + 'blog/qna');
                } else {
                    swal("Oops!", response.message, "error");
                }
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
                swal("Error!", "Something went wrong during update.", "error");
            }
        });
    });
});

// Fetch and populate post dropdown options
function loadPostOptions() {
    $.ajax({
        url: base_url + 'get-post/0',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status === 200 && response.data) {
                populatePosts(response.data);
            } else {
                swal("Error", "Unable to fetch posts.", "error");
            }
        },
        error: function () {
            swal("Error", "Unable to fetch posts.", "error");
        }
    });
}

function populatePosts(posts) {
    const select = $('#post_id');
    select.find('option:not(:first)').remove();

    $.each(posts, function (i, post) {
        if (post.is_active === '1' || post.status === 'active') {
            select.append($('<option>', {
                value: post.id,
                text: post.title
            }));
        }
    });
}

// Fetch QnA by ID and populate the form
function getQnaById(qnaId) {
    $.ajax({
        url: base_url + 'get-qna/' + qnaId,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status === 200 && response.data) {
                setQnaForm(response.data);
            } else {
                swal("Error", "Q&A not found.", "error");
            }
        },
        error: function () {
            swal("Error", "Unable to fetch Q&A data.", "error");
        }
    });
}

function setQnaForm(data) {
    $('#post_id').val(data.post_id).trigger('change');
    $('#status').val(data.status);
    $('#question').val(data.question);
    updateCharCount('question', 'questionCharCount'); // update char count when form loads

    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.instances['answer'].setData(data.answer);
        // Update char count for CKEditor
        updateCkEditorCharCount('answer', 'answerCharCount');
    } else {
        $('#answer').val(data.answer);
        updateCharCount('answer', 'answerCharCount');
    }
}

// ---------
// Character counting helpers
// ---------

// Function to count chars for normal textarea
function updateCharCount(textareaId, counterId) {
    const length = $('#' + textareaId).val().length;
    $('#' + counterId).text(length + ' characters');
}

// Function to count chars for CKEditor content (strips HTML tags)
function updateCkEditorCharCount(editorName, counterId) {
    const editor = CKEDITOR.instances[editorName];
    if (!editor) return;

    const data = editor.getData().replace(/<[^>]*>/g, ''); // Strip HTML tags
    $('#' + counterId).text(data.length + ' characters');
}
