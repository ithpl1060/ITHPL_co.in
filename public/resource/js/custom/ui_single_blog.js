const base_url = sessionStorage.getItem("uibaseurl");
const pageUrl = encodeURIComponent(window.location.href);
  const pageTitle = encodeURIComponent(document.title);
let title ='';
function getDateFormat(sdate) {
    const date = new Date(sdate);
    // Get parts
    const day = date.getDate();
    const month = date.toLocaleString('en-US', { month: 'short' }).toUpperCase();
    const year = date.getFullYear();

    // Format time in 12-hour format
    const hours = date.getHours() % 12 || 12; // convert to 12h format
    const minutes = String(date.getMinutes()).padStart(2, '0');
    const ampm = date.getHours() >= 12 ? 'PM' : 'AM';

    // Combine all
    const formattedDateTime = `${day} ${month} ${year}, ${hours}:${minutes} ${ampm}`;
    return formattedDateTime;
}

function getPostBySlug(slug) {
    $.ajax({
        url: base_url + 'get-post-by-slug/' + slug,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status === 200 && response.data) {
                setPost(response.data);
            } else {
                swal("Error", "blog not found.", "error");
            }
        },
        error: function () {
            swal("Error", "Unable to fetch blog data.", "error");
        }
    });
}

getPostBySlug(slug);

function setPost(data){
 //   console.log(JSON.stringify(data));
 title =data.title;
 $('#category').html(data.category);
 $('#created-at').html(getDateFormat(data.created_at));
 $('#title').html(data.title);
 $('#img-url').attr('src',base_url+data.img_url);
 $('#img-url').attr('alt',data.slug);
 $('#highlight-text').html(data.highlight_text.replace(/<\/?p>/g, ''));
 $('#body').html(data.body.replace(/<\/?p>/g, ''));
}

// Facebook Share
  $('#share-facebook').on('click', function() {
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`, 
      '_blank', 'width=600,height=400');
  });

  // LinkedIn Share
  $('#share-linkedin').on('click', function() {
    window.open(`https://www.linkedin.com/shareArticle?mini=true&url=${pageUrl}&title=${title}`, 
      '_blank', 'width=600,height=400');
  });

  // WhatsApp Share
  $('#share-whatsapp').on('click', function() {
    window.open(`https://api.whatsapp.com/send?text=${title}%20${pageUrl}`, '_blank');
  });

  function copyLink(){
    navigator.clipboard.writeText(window.location.href)
      .then(() => alert('✅ Link copied to clipboard!'))
      .catch(() => alert('❌ Failed to copy link.'));
  }


  function getPost(page, limit, search='') {
    var formdata = new FormData();
    formdata.append("page", page);
    formdata.append("limit", limit);
    formdata.append("search", search);
    $.ajax({
        url: base_url + 'get-post-ui',
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function (response) {
            if (response.status === 200 && response.data) {
                //setRecentPost(response.data[0]);
                setAllPosts(response.data);
                //setPaginations(response,search);
                //console.log(response.data);
            }
        },
        error: function () {
            // swal("Error", "Unable to fetch category data.", "error");
        }


    });
}
getPost(0, 3, '');
function setAllPosts(data) {
    $('#all-post-list').empty();
    // Loop through response and append options
    $.each(data, function (index, post) {

        if (post.status === 'published') {
            $('#all-post-list').append(
                ` <div class="flex flex-col  group">
            <img class="rounded-2xl h-64 w-full object-cover transition-transform duration-700 group-hover:scale-105 " src="${base_url + post.url}" alt="${post.slug}">
            <div class="mt-4">
              <div class="flex space-x-4 text-xs "><p class="font-bold text-gray-800">${post.category}</p><p class="text-gray-400 font-medium">${getDateFormat(post.created_at)}</p></div>
              <h3 class="font-raleway font-bold text-2xl mt-2 text-gray-800">${post.title}</h3>
              <p class=" text-base text-gray-600 mt-2">${post.highlight_text.replace(/<\/?p>/g, '')}</p>
              <a href="${base_url}blog/${post.slug}" class=" font-bold text-lg mt-4 text-[#C48BE8]">Read More...</a>
            </div>
          </div>`
            );
        }
    });
}

function viewAll(){
    getPost(0,100,'');
}