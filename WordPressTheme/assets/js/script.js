// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});
});


// ヘッダーカラー *********//
jQuery(window).on('scroll', function () {
 
  if (jQuery('.header').height() < jQuery(this).scrollTop()) { 
  jQuery('.header').addClass('change-color');
  }
  else {
  jQuery('.header').removeClass('change-color');
  }
});

//画面トップに戻る *********//
jQuery(function () {
  var pagetop = jQuery('#js-pageTop');
  pagetop.hide();
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 300) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    jQuery('body, html').animate({
        scrollTop: 0
    }, 300);
    return false;
  });
});

//ドロワー *********//
jQuery("#js_drawer").on("click", function() {
	jQuery(".header_nav").toggleClass("is__open");
	jQuery(".nav-btn").toggleClass("is__open");
	
	if (jQuery(".header_nav").hasClass("is__open")) {
		jQuery('body').css('overflow-y', 'hidden');
	} else {
		jQuery('body').css('overflow-y', 'auto');
	}
});