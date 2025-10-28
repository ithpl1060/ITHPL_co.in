$(function () {
    "use strict";

    console.log('JS loaded');  // To confirm JS is running

    // Load posts dropdown
    loadPostOptions();

    // Setup character counters for both textareas
    setupCharCounter('question', 'questionCharCount');
    setupCharCounter('answer', 'answerCharCount');

    // Cancel button action
    $('#cancelBtn').click(function () {
        window.location.href = base_url + 'blog/qna';
    });

    // Form submission
    $('#addQnaForm').on('submit', function (e) {
        e.preventDefault();

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
        formData.append("empId",empData.id);
        $.ajax({
            url: base_url + 'qna',
            type: 'POST',
            headers: { "Authorization": token },
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response) {
                console.log('Response:', response);
                if (response.status === 200) {
                    swal("Success!", response.message, "success").then(() => {
                        window.location.href = base_url + 'blog/qna';
                    });
                } else {
                    swal("Oops!", response.message || "Failed to save Q&A", "error");
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', error);
                swal("Error", "An error occurred while submitting the form.", "error");
            }
        });
    });

    // Function to load post options from API
    function loadPostOptions() {
        console.log('Loading posts...');
        $.ajax({
            url: base_url + 'fetch-post',
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                console.log('Posts response:', response);
                if (response.status === 200 && response.data) {
                    populatePosts(response.data);
                } else {
                    swal("Error", "Unable to fetch posts.", "error");
                }
            },
            error: function (xhr, status, error) {
                console.error('Error loading posts:', error);
                swal("Error", "Unable to fetch posts.", "error");
            }
        });
    }

    // Populate post dropdown options
    function populatePosts(posts) {
        const select = $('#post_id');
        select.find('option:not(:first)').remove();

        $.each(posts, function (i, post) {
            
                select.append($('<option>', {
                    value: post.id,
                    text: post.title
                }));
            
        });
    }

    // Character counter setup
    function setupCharCounter(textareaId, counterId) {
        const $textarea = $('#' + textareaId);
        const $counter = $('#' + counterId);

        updateCharCount();

        $textarea.on('input', updateCharCount);

        function updateCharCount() {
            const length = $textarea.val().length;
            $counter.text(length + ' characters');
        }
    }
});
