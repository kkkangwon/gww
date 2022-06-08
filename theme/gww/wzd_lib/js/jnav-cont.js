var top_menu_06 = top_menu_06 || {};

top_menu_06 = {
    elm: {
        $header: $("#header"),
        $gnb: $("#gnb"),
    },
    common: function () {
        var $self = this;
        var $header = $("#header"),
            $gnb = $("#gnb"),
            $lnb = $("#lnb");

        $gnb.children("li").each(function (index, item) {
            $(item).on("mouseover focusin", function () {
                $header.addClass("all");
            });
        });
        $header.on("mouseleave", function () {
            $header.removeClass("all");
        });

        $("#container").click(function () {
            if ($("#linkSelectBox").is(".on")) {
                $("#linkSelectBox").removeClass("on");
            };
        });


        if ($lnb.length > 0) {
            var lnbOffset = $(".lnb_wrap").offset().top;
            $(window).scroll(function () {
                if ($(this).scrollTop() >= lnbOffset) {
                    $lnb.addClass("on");
                } else {
                    $lnb.removeClass("on");
                };
            });
            $lnb.children("ul").children("li").each(function (index, item) {
                $(item).children("a").click(function (e) {
                    if ($(item).children(".sub_lnb").length > 0) {
                        $(item).toggleClass("active").siblings().removeClass("active");
                        return false;
                    };
                });
            });

            $("#container").click(function () {
                if ($("#lnb").find(".active").length > 0) {
                    $("#lnb").find(".active").removeClass("active");
                };
            });
        };
    },

    gnbActive: function (depth1, depth2) {
        var $gnb = $("#gnb"),
            $lnb = $("#lnb");
        (depth1 !== null) && $gnb.find(".depth1[data-page=" + depth1 + "]").addClass("on");
        (depth2 !== null) && $lnb.find("li[data-page=" + depth2 + "]").addClass("on");
    },

}
top_menu_06.common();