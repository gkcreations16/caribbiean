// -----------------------------------
$('button[data-bs-toggle="pill"]')
    .on("shown.bs.tab", function() {
        $($(this).attr("data-bs-target"))
            .find(".listing-slider")
            .slick({
                dots: true,
                arrows: false,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1100,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
    })
    .first()
    .trigger("shown.bs.tab");

// jQuery(document).ready(function(){
//   jQuery(".listing-slide-wrap").slice(0, 6).show();
//   jQuery("#loadPropertylist").on("click", function(e){
//     e.preventDefault();
//     jQuery(".listing-slide-wrap:hidden").slice(0, 3).slideDown();
//     if(jQuery(".listing-slide-wrap:hidden").length == 0) {
//       jQuery("#loadPropertylist").text("No Property").addClass("noProperty");
//     }
//   });

// })

// jQuery(document).ready(function(){
//   jQuery(".listing-slide-wrap-2").slice(0, 4).show();
//   jQuery("#loadPropertylist-2").on("click", function(e){
//     e.preventDefault();
//     jQuery(".listing-slide-wrap-2:hidden").slice(0, 3).slideDown();
//     if(jQuery(".listing-slide-wrap-2:hidden").length == 0) {
//       jQuery("#loadPropertylist-2").text("No Property").addClass("noProperty");
//     }
//   });

// })

// jQuery(document).ready(function(){
//   jQuery(".listing-slide-map-listing").slice(0, 4).show();
//   jQuery("#loadPropertylist-3").on("click", function(e){
//     e.preventDefault();
//     jQuery(".listing-slide-map-listing:hidden").slice(0, 3).slideDown();
//     if(jQuery(".listing-slide-map-listing:hidden").length == 0) {
//       jQuery("#loadPropertylist-3").text("No Property").addClass("noProperty");
//     }
//   });

// })

//   var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
// triggerTabList.forEach(function (triggerEl) {
//   var tabTrigger = new bootstrap.Tab(triggerEl)

//   triggerEl.addEventListener('click', function (event) {
//     event.preventDefault()
//     tabTrigger.show()
//   })
// })

// var triggerEl = document.querySelector('#myTab a[href="#profile"]')
// bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

// var triggerFirstTabEl = document.querySelector('#myTab li:first-child a')
// bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab

$("#new-style-categories-slide").slick({
    rows: 2,
    centerPadding: "60px",
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 578,
            settings: {
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

// $('.listing-slider-img').slick({
//   dots: false,
//   arrows: true,
//   infinite: true,
//   speed: 300,
//   slidesToShow: 1,
//   adaptiveHeight: true,
//   prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
//         nextArrow:"<button type='button' class='slick-next pull-left'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
//         responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         infinite: false,
//         dots: false,
//       }
//     },
//     {
//       breakpoint: 768,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//       }
//     },
//     {
//       breakpoint: 576,
//       settings: {
//         arrows: false,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//       }
//     }

//   ]
// });

$(".listing-slider-img").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: ".other-listing-slider-img",
    adaptiveHeight: true,
    prevArrow:
        "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
        "<button type='button' class='slick-next pull-left'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                dots: false
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 576,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$(".other-listing-slider-img").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: ".listing-slider-img",
    autoplay: true,
    arrows: false,
    adaptiveHeight: true,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 7,
                slidesToScroll: 1,
                infinite: false,
                dots: false
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: false,
                dots: false
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: true
            }
        },
        {
            breakpoint: 576,
            settings: {
                arrows: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: true
            }
        }
    ]
});

var valueHover = 0;
function calcSliderPos(e, maxV) {
    return (e.offsetX / e.target.clientWidth) * parseInt(maxV, 10);
}

$(".starrate").on("click", function() {
    $(this).data("val", valueHover);
    $(this).addClass("saved");
});

$(".starrate").on("mouseout", function() {
    upStars($(this).data("val"));
});

$(".starrate span.ctrl").on("mousemove", function(e) {
    var maxV = parseInt(
        $(this)
            .parent("div")
            .data("max")
    );
    valueHover = Math.ceil(calcSliderPos(e, maxV) * 2) / 2;
    upStars(valueHover);
});

function upStars(val) {
    var val = parseFloat(val);
    $("#test").html(val.toFixed(1));

    var full = Number.isInteger(val);
    val = parseInt(val);
    var stars = $("#starrate i");

    stars.slice(0, val).attr("class", "fas fa-fw fa-star");
    if (!full) {
        stars.slice(val, val + 1).attr("class", "fas fa-fw fa-star-half-alt");
        val++;
    }
    stars.slice(val, 5).attr("class", "far fa-fw fa-star");
}

$(document).ready(function() {
    $(".starrate span.ctrl").width($(".starrate span.cont").width());
    $(".starrate span.ctrl").height($(".starrate span.cont").height());
});

$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i];
                var fileReader = new FileReader();
                fileReader.onload = function(e) {
                    var file = e.target;
                    $(
                        '<span class="pip">' +
                            '<img class="imageThumb" src="' +
                            e.target.result +
                            '"/>' +
                            '<br/><span class="remove">Remove image</span>' +
                            "</span>"
                    ).insertAfter("#files");
                    $(".remove").click(function() {
                        $(this)
                            .parent(".pip")
                            .remove();
                    });

                    // Old code here
                    /*$("<img></img>", {
                  class: "imageThumb",
                  src: e.target.result,
                  title: file.name + " | Click to remove"
                }).insertAfter("#files").click(function(){$(this).remove();});*/
                };
                fileReader.readAsDataURL(f);
            }
            console.log(files);
        });
    } else {
        alert("Your browser doesn't support to File API");
    }
});

$(function() {
    $("#btn-upload").click(function(e) {
        e.preventDefault();
        $("#file").click();
    });
});

//     var checkboxes = $(".group input[type='radio']");

// $(checkboxes).click(function() {
//   var checkedcheckboxcount = $(".group input[type='radio']:checked").size();
//   if (checkedcheckboxcount < 1) {
//     $(this).prop('checked', true);
//   }
// });

$(".mobile-slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2500,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 578,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$(".share-button").on("click", function() {
    $(this).addClass("open");
});
$(".share-items").draggable({
    axis: "x",
    containment: ".share-items-wrapper"
});
$(".share-item").on("click", function() {
    $(".share-button").addClass("shared");
    setTimeout(function() {
        $(".share-button").addClass("thankyou");
    }, 800);
    setTimeout(function() {
        $(".share-button").removeClass("open");
        $(".share-button").removeClass("shared");
        $(".share-button").removeClass("thankyou");
    }, 2500);
});

// $(document).ready(function() {
//     $("#v-pills-tab a").on("click", function() {
//         $(this)
//             .removeClass("active")
//             .addClass("active");
//     });
// });
$(function() {
    var current = location.pathname;
    $(".nav-pills a").each(function() {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr("href").indexOf(current) !== -1) {
            $this.addClass("active");
        }
    });
});
