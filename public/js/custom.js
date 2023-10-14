/*
|--------------------------------------------------------------------------
| // Animation on Scroll.
|--------------------------------------------------------------------------
*/
function scrollAnimation() {
    const shouldAnimate = $("body").data("scroll-animation");
    if (true === shouldAnimate) {
        new WOW().init();
    }
}
scrollAnimation();


/*
|--------------------------------------------------------------------------
| Mobile Menu
|--------------------------------------------------------------------------
*/
$(document).ready(function(){
    $(".hamburger").click(function(){
        $(".mobile-menu").addClass("mobile-menu-active");
    });
    $(".mobile-menu-close").click(function(){
        $(".mobile-menu").removeClass("mobile-menu-active");
    });

    //Profile Popup
    $(".nav_btns").click(function(){
        $(".profile-popup").toggleClass("active");
    });
});

/*
|--------------------------------------------------------------------------
| Image Upload
|--------------------------------------------------------------------------
*/
const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "Choose an image";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
const inputTarget = e.target;
const file = inputTarget.files[0];

if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
        const readerTarget = e.target;

        const img = document.createElement("img");
        img.src = readerTarget.result;
        img.classList.add("picture__img");

        pictureImage.innerHTML = "";
        pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
    } else {
        pictureImage.innerHTML = pictureImageTxt;
    }
});


/*
|--------------------------------------------------------------------------
| Post Tag
|--------------------------------------------------------------------------
*/
(function () {
    var tagList = ['Technology', 'Sports', 'Web Development', 'Web  Design'];

    
    var $tagList = $("#tagList");
    var $newTag = $("#newTag");

    tagList_render();

    
    function tagList_render () {
        $tagList.empty();
        tagList.map (function (_tag) {
        var temp = '<li>'+ _tag +'<span class="rmTag">&times;</span></li>';
        $tagList.append(temp);
        });
		$('#Tags').val(tagList.join(","));
    };

    $newTag.on('keyup', function (e) {
        if (e.keyCode == 13) {
        var newTag = $("#newTag").val();
        if( newTag.replace(/\s/g, '') !== '' ){
            tagList.push(newTag);
            $newTag.val('');
            tagList_render();
        }
        }
    });

    $tagList.on("click", "li>span.rmTag", function(){
        var index = $(this).parent().index();
        tagList.splice(index, 1);
        tagList_render();
    });
})();