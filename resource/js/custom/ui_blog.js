const base_url = sessionStorage.getItem("uibaseurl");
const graytextclass = 'flex items-center justify-center px-4 h-10 leading-tight text-gray-800 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white';
const purpletextclass = 'flex items-center justify-center px-4 h-10 text-purple-600 border border-gray-300 bg-purple-50 hover:bg-purple-100 hover:text-purple-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white';
//console.log('myurl' + base_url);

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
                setRecentPost(response.data[0]);
                setAllPosts(response.data);
                setPaginations(response,search);
                //console.log(response.data);
            }
        },
        error: function () {
            // swal("Error", "Unable to fetch category data.", "error");
        }


    });
}

function setRecentPost(data) {
    $('#recentBlogimg').attr('src', base_url + data.url);
    $('#rhero-buttons').attr('href', base_url+'blog/' + data.slug);
    $('#recentBlogimg').attr('alt', base_url + data.slug);
    $('#rcategory').text(data.category);
    $('#rpdate').text(getDateFormat(data.created_at));
    $('#rblogtitle').text(data.title);
    $('#rhighlight_text').html(data.highlight_text);
}

function setAllPosts(data) {
    $('#all-post-list').empty();
    // Loop through response and append options
    $.each(data, function (index, post) {
        console.log('.....'+post);
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
function setPaginations(response,search) {
    let previousId = sessionStorage.getItem("paginationId");

    var paginate = `<ul class="inline-flex -space-x-px text-base h-15">
            <li>
              <a href="javascript:void(0);" id="previouspagi" onclick="previousPage(${previousId},${Number(response.perPage)},'${search}');"
                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-800 bg-[#E1ACF9] border border-e-0 border-gray-300 rounded-s-lg hover:bg-purple-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>`;
    for (let i = 0; i < response.totalPages; i++) {
        if (previousId != null && previousId == i) {
            paginate += `<li>
              <a href="javascript:void(0);" aria-current="page" id="pg-${i}" onclick="getPost(${Number(response.perPage) * i}, ${Number(response.perPage)}, '${search}');changetext(${i});"
                class="${purpletextclass}">${i + 1}</a>
            </li>`;
        } else {
            paginate += `<li>
              <a href="javascript:void(0);" id="pg-${i}" onclick="getPost(${Number(response.perPage) * i}, ${Number(response.perPage)}, '${search}');changetext(${i});"
                class="${graytextclass}">${i + 1}</a>
            </li>`;
        }
    }
    paginate += `<li>
              <a href="javascript:void(0);" id="nextpagi" onclick="nextPage(${previousId},${Number(response.perPage)},${response.totalPages},'${search}');"
                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-800 bg-[#E1ACF9] border border-gray-300 rounded-e-lg hover:bg-purple-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
          </ul>`;
    //console.log(paginate);
    $('#paginations').html(paginate);
}

function changetext(eleId) {
    sessionStorage.setItem("paginationId", eleId);
}
$(document).ready(function () {
    $.ajax({
        url: base_url + 'get-category/' + 0,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status === 200 && response.data) {
                setCategory(response.data);
            }
        },
        error: function () {
            // swal("Error", "Unable to fetch category data.", "error");
        }


    });

    function setCategory(data) {

        // Loop through response and append options
        $.each(data, function (index, category) {

            if (category.is_active === '1') {
                $('#categories').append(
                    `<a href="javascript:void(0);" onclick="getPostByCategory('${category.name}');" class="flex items-center p-5 bg-gray-200 rounded-xl w-full hover:bg-gray-300 transition-colors"><img class="w-10 h-10" src="${category.icon_img}" alt="${category.slug} icon"><span class="font-inter font-bold text-2xl sm:text-3xl ml-6 text-black">${category.name}</span></a>`
                );

            }
        });
    }
    getPost(0, 4, '');

});


function previousPage(i,perPage,search){
    if(i>0){
    sessionStorage.setItem("paginationId", i-1);
    getPost((i*perPage)-perPage,perPage,search);
    }
}
function nextPage(i,perPage,totalpages,search){
    if(i<totalpages){
    sessionStorage.setItem("paginationId", i+1);
    getPost((i*perPage)+perPage,perPage,search);
    }
}

function viewAll(){
    getPost(0,100,'');
}

function getPostByCategory(cname){
    console.log('cname='+cname);
    sessionStorage.setItem("paginationId", 0);
    getPost(0,4,cname);
}

function getPopularPost() {
    var formdata = new FormData();
    
    $.ajax({
        url: base_url + 'get-popular-post',
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function (response) {
            if (response.status === 200 && response.data) {
                setPopularPost(response.data);
             }
        },
        error: function () {
            // swal("Error", "Unable to fetch category data.", "error");
        }


    });
}
getPopularPost();
function setPopularPost(data){
 $('#popular-posts').empty();
    // Loop through response and append options
    $.each(data, function (index, post) {

        if (post.status === 'published') {
            $('#popular-posts').append(
                ` <div class="flex flex-col group">
              <img class="rounded-xl h-48 w-full object-cover transition-transform duration-700 group-hover:scale-105 "
                src="${base_url + post.img_url}" alt="${post.slug}">
              <div class="mt-2">
                <div class="flex space-x-2 text-[9px] ">
                  <p class="font-bold text-gray-800">${post.category}</p>
                  <p class="text-gray-400 font-medium">${getDateFormat(post.created_at)}</p>
                </div>
                <h4 class="font-raleway font-bold text-lg mt-1 text-gray-800 group-hover:text-custom-purple-light">${post.title}</h4>
                <a href="${base_url}blog/${post.slug}" class=" font-bold text-sm mt-2 text-[#C48BE8]">Read More...</a>
              </div>
            </div>`
            );
        }
    });   
}