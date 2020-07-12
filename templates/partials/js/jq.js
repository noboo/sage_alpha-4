// page top
jQuery(function() {
  var pageTop = jQuery(".page-top");
  pageTop.hide();
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 400) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
  });
  pageTop.click(function() {
    jQuery("body,html").animate(
      {
        scrollTop: 0
      },
      900
    );
    return false;
  });
  // start fade
  jQuery(window).on("load", function() {
    jQuery(".loader-bg").hide();
  });
  // bottomenu
  var menuHeight = jQuery("#bottomenu").height();
  var navPos = 10;
  jQuery(window).scroll(function() {
    var Pos = jQuery(this).scrollTop();
    if (Pos > navPos) {
      if (jQuery(window).scrollTop() >= 100) {
        jQuery("#bottomenu").css("bottom", "-" + menuHeight + "px");
      }
    } else {
      jQuery("#bottomenu").css("bottom", "0px");
    }
    navPos = Pos;
  });
  // --navbar fade--
  jQuery(window).on("load", function() {
    var offset = jQuery(".navbar").offset();

    jQuery(window).scroll(function() {
      if (jQuery(window).scrollTop() > offset.top) {
        jQuery(".navbar").addClass("fixed-top");
      } else {
        jQuery(".navbar").removeClass("fixed-top");
      }
    });
  });

  // current_page_item
  jQuery(
    ".current_page_item a, .current-menu-item a, .current-cat a, .current-menu-parent a"
  ).addClass("bg-light text-dark");
});

jQuery(document).ready(function() {
  console.log("ready");
  var EffectH = 100;
  jQuery(window).on("scroll load", function() {
    var scTop = jQuery(this).scrollTop();
    var scBottom = scTop + jQuery(this).height();
    var effectPos = scBottom - EffectH;
    jQuery(".breffects").each(function() {
      var thisPos = jQuery(this).offset().top;
      if (thisPos < effectPos) {
        // .js-scrollという要素が可視範囲に入ったら
        jQuery
          .when(
            // .js-scrollにshowというclassを付与
            jQuery(this).addClass("")
          )
          .done(function() {
            //  その後、0.5秒遅らせて.js-scrollにdoneというclassを付与
            jQuery(this)
              .delay(0)
              .queue(function() {
                jQuery(this).addClass("blockn");
              });
          });
      }
    });
  });
});
