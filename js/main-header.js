function manageClass() {
    var e = $("body");
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? ($("ul.abt-us-listing-inner").addClass("touch_screen").removeClass("desktop_screen"), $("ul.abt-us-listing-inner li").find(".abt-content-area-listing > .abt-pg-listing").hide(), $("ul.abt-us-listing-inner li").removeClass("open"), $("body").click(function(e) {
        $(e.target).parents().hasClass("abt-us-listing-inner") || ($("ul.abt-us-listing-inner li").find(".abt-content-area-listing > .abt-pg-listing").hide(), $("ul.abt-us-listing-inner li").removeClass("open"))
    }), $("ul.abt-us-listing-inner li").click(function() {
        $("ul.abt-us-listing-inner li").removeClass("open"), $("ul.abt-us-listing-inner li").find(".abt-content-area-listing > .abt-pg-listing").hide(), $(this).addClass("open"), $(this).find(".abt-content-area-listing > .abt-pg-listing").show()
    })) : ($("ul.abt-us-listing-inner li").unbind("click"), $("ul.abt-us-listing-inner").addClass("desktop_screen").removeClass("touch_screen")), $(window).width() < 992 ? e.addClass("navigation-closed") : $(window).scroll(function() {
        var t = $(window).scrollTop();
        $(window).width() > 992 && (t >= 100 ? e.addClass("navigation-closed").removeClass("white-bg") : e.removeClass("navigation-closed").removeClass("white-bg"))
    })
}





(jQuery), $(document).ready(function() {
    manageClass();
    var e = $("body");
    $(document).on("click", "#toggle-navigation", function() {
        $(".navigation-closed").is(":visible") ? e.removeClass("navigation-closed").addClass("white-bg") : e.addClass("navigation-closed")
    })
}), $(window).resize(function() {
    $("body").removeClass("navigation-closed"), manageClass()
}), $(function() {
    AOS.init()
}), $(window).on("load", function() {
    AOS.refresh()
}), $(document).ready(function() {
    $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !1,
        fade: !0,
        asNavFor: ".slider-nav"
    }), $(".slider-nav").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        dots: !1,
        centerMode: !0,
        focusOnSelect: !0
    }), $(".lazy").slick({
        lazyLoad: "ondemand",
        infinite: !0
    })/*, $("#verticalTab").easyResponsiveTabsHover({
        type: "vertical",
        width: "auto",
        fit: !0
    }), $("#verticalTab1").easyResponsiveTabs({
        type: "vertical",
        width: "auto",
        fit: !0
    }), $("#verticalTab11").easyResponsiveTabs({
        type: "vertical",
        width: "auto",
        fit: !0
    })*/, $(function() {
        for (var e = $(".team-gallery"), t = e.children(); t.length;) e.append(t.splice(Math.floor(Math.random() * t.length), 1)[0])
    }), $("li.inquiry-now a").on("click", function() {
        $("body").addClass("popup-requestquote")
    }), $(".close-icon").on("click", function() {
        $("body").removeClass("popup-requestquote")
    })
});
var onloadCallback = function() {
        $("#g-recaptcha-header").length > 0 && (html_element_id2 = grecaptcha.render("g-recaptcha-header", {
            sitekey: "6LdHgkMUAAAAAHZvIwtbNngTac8U65evaTQ9W7Ou",
            callback: formfocus_header,
            "expired-callback": formfocus_header
        })), $("#g-recaptcha-footer").length > 0 && (html_element_id = grecaptcha.render("g-recaptcha-footer", {
            sitekey: "6LdHgkMUAAAAAHZvIwtbNngTac8U65evaTQ9W7Ou",
            callback: formfocus_footer,
            "expired-callback": formfocus_footer
        }))
    },
    formfocus_header = function(e) {
        try {
            window.innerWidth < 768 && /iPhone|iPod/.test(navigator.userAgent) && !window.MSStream && $("html, body").animate({
                scrollTop: $("#g-recaptcha-header").offset().top - 200
            }, "slow")
        } catch (t) {}
    },
    formfocus_footer = function(e) {
        try {
            window.innerWidth < 768 && /iPhone|iPod/.test(navigator.userAgent) && !window.MSStream && $("html, body").animate({
                scrollTop: $("#g-recaptcha-footer").offset().top - 200
            }, "slow")
        } catch (t) {}
    };