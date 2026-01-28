$(document).ready(function() {
    $(".navbar-inverse .navbar-nav > li > a, .dropdown-menu>li>a, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a").hover(function() {
        $(this).attr("rel", $(this).attr("title")), $(this).removeAttr("title")
    }, function() {
        $(this).attr("title", $(this).attr("rel")), $(this).removeAttr("rel")
    }), $("#blog-details .row").find("h2").each(function() {
        var t = $(this).html();
        $(this).html("<span>" + t + "</span>")
    })
}), $(".mainbanner .flexslider").flexslider({
    animation: "slide",
    directionNav: !0,
    controlNav: !1
}), $(function() {
    var t = $(".content-hidden").hide();
    $(".content-show").click(function() {
        var e = $(this).next().stop(!0, !0).slideToggle();
        t.not(e).hide(), event.preventDefault()
    })
}), $(window).scroll(function() {
    $(this).scrollTop() > 100 ? $(".totop").fadeIn() : $(".totop").fadeOut()
}), $(function() {
    $("a.totop, a.scroll").click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var t = $(this.hash);
            if ((t = t.length ? t : $("[name=" + this.hash.slice(1) + "]")).length) return $("html, body").animate({
                scrollTop: t.offset().top
            }, 1e3), !1
        }
    })
}), $(".subtoggle").click(function(t) {
    t.stopPropagation(), t.preventDefault(), $(this).next(".dropdown-menu").slideToggle("fast", function() {
        $(this).toggleClass("openmenu")
    })
}), $.fn.equalHeight = function() {
    var t = 0;
    return this.each(function(e, i) {
        var a = $(i).height();
        t = Math.max(t, a)
    }).height(t)
}, $(document).ready(function() {
    $(".equalheight").equalHeight(), $(".equalheight01").equalHeight(), $(".equalheight02").equalHeight(), $(".equalheight03").equalHeight()
}), $(window).resize(function() {
    $(".equalheight").css("height", "auto"), $(".equalheight").equalHeight(), $(".equalheight01").css("height", "auto"), $(".equalheight01").equalHeight(), $(".equalheight02").css("height", "auto"), $(".equalheight02").equalHeight(), $(".equalheight03").css("height", "auto"), $(".equalheight03").equalHeight()
});

$('#couselors .toggle').click(function(){
	$(this).parent('#couselors').toggleClass('show');
	// $(this).parent('#couselors').find().show("slide", { direction: "left" }, 1000);
});