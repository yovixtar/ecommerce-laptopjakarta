jQuery(document).ready(function(){jQuery(window).scroll(function(){100<jQuery(this).scrollTop()?jQuery(".keatas").fadeIn():jQuery(".keatas").fadeOut()});jQuery(".keatas").click(function(){jQuery("html, body").animate({scrollTop:0},600);return!1})});jQuery(document).ready(function(){jQuery("img.lazy").show().lazyload({effect:"fadeIn",threshold:400})});jQuery(".photo").each(function(){jQuery(this).magnificPopup({delegate:"a",type:"image",gallery:{enabled:!0}})});jQuery(function(){jQuery(".popup-modal").magnificPopup({type:"inline",preloader:!1,modal:!0});jQuery(document).on("click",".vtr-popup-close",function(a){a.preventDefault();jQuery.magnificPopup.close()})});jQuery(document).ready(function(){if("yes"==jQuery.cookie("visited")||"0"==popup_act)return!1;window.setTimeout(function(){jQuery.magnificPopup.open({items:{src:jQuery("#fb-popup"),type:"inline"},modal:!0})},5E3);jQuery.cookie("visited","yes",{expires:1})});jQuery(document).ready(function(){jQuery("#home-slider").lightSlider({adaptiveHeight:!0,auto:!0,loop:!0,keyPress:!1,enableDrag:!1,enableTouch:!1,speed:1E3,pause:5500,item:1,pager:!1})});jQuery(document).ready(function(){});jQuery(document).ready(function(){jQuery("#testimoni-slider").lightSlider({auto:!0,loop:!0,keyPress:!0,enableDrag:!1,enableTouch:!1,speed:1E3,pause:2500,item:1,pager:!1})});jQuery(document).ready(function(){jQuery("#new-slider,#bestseller-slider,#sale-slider").lightSlider({auto:!0,loop:!0,keyPress:!0,enableDrag:!1,enableTouch:!1,speed:1E3,pause:2500,item:1,pager:!1})});jQuery(document).ready(function(){jQuery("#small-slider").lightSlider({auto:!0,loop:!0,keyPress:!0,enableDrag:!1,item:3,slideMove:1,easing:"cubic-bezier(0.25, 0, 0.25, 1)",speed:600,pager:!1,controls:!1})});jQuery(document).ready(function(){jQuery("#marquee").simplemarquee({speed:1E4,direction:"rtl",pause:!1})});jQuery(document).ready(function(){jQuery(".vtr-menu-icon").click(function(a){a.preventDefault();jQuery(this).toggleClass("active");jQuery(".mobile-menu").slideToggle()})});jQuery(document).ready(function(){jQuery(".kategori-menu").find("li.menu-item-has-children").append('<i class="icon-plus"></i>');jQuery(".kategori-menu li.menu-item-has-children i").on("click",function(){jQuery(this).hasClass("icon-minus")?jQuery(this).removeClass("icon-minus").parent("li.menu-item-has-children").find("> ul").slideToggle("fast"):jQuery(this).addClass("icon-minus").parent("li.menu-item-has-children").find("> ul").slideToggle("fast")})});jQuery(document).ready(function(){jQuery(".vtr-search-icon").click(function(){jQuery(".search-box").slideToggle("fast")})});jQuery(document).ready(function(){jQuery(".vtr-search-icon1").click(function(){jQuery(".search-box").slideToggle("fast")})});