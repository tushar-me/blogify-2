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

    //Comment Popup
    $(".comment_popup_menu").click(function(){
        var $parentContainer = $(this).closest('.comment_text');
        
        $parentContainer.find(".comment_popup").toggleClass("d-none");
    }); 
    
});

/*
|--------------------------------------------------------------------------
| Image Upload
|--------------------------------------------------------------------------
*/

$(".image-box").click(function(event) {
	var previewImg = $(this).children("img");

	$(this)
		.siblings()
		.children("input")
		.trigger("click");

	$(this)
		.siblings()
		.children("input")
		.change(function() {
			var reader = new FileReader();

			reader.onload = function(e) {
				var url = e.target.result;
				$(previewImg).attr("src", url);
				previewImg.parent().css("background", "transparent");
				previewImg.show();
				previewImg.siblings("p").hide();
			};
			reader.readAsDataURL(this.files[0]);
		});
});



/*
|--------------------------------------------------------------------------
| Post Create Tag
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