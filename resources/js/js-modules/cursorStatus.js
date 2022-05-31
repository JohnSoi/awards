window.cursorStatus = {
    timer: !1, isLeftHalf_old: !1, hoverElem: !1, mousemoveHref: function (e, t) {
        $(t.cursor).hide(), "A" != $(document.elementFromPoint(e.clientX, e.clientY))[0].tagName && $(t.cursor).show()
    }, create: function (e, t) {
        var i = t.cursor ? $(t.cursor).height() / 2 : 0, r = t.cursor ? $(t.cursor).width() / 2 : 0,
            a = function (e) {
                e.on("mousemove", (function () {
                    $(this).off("mousemove"), setTimeout((function () {
                        s(e)
                    }), 0)
                }))
            }, s = function (e) {
                $("body").on("mousemove", (function (s) {
                    t.cursor && ($(t.cursor).css({
                        top: s.clientY - i,
                        left: s.clientX - r
                    }), cursorStatus.mousemoveHref(s, t)), cursorStatus.timer || (cursorStatus.timer = setTimeout((function () {
                        cursorStatus.changeClass(e, s), cursorStatus.elemHover(t, s), e.isMouseOver(s.pageY) ? $("body").removeClass("cursor-off") : ($("body").addClass("cursor-off").off("mousemove"), setTimeout((function () {
                            a(e)
                        }), 0)), cursorStatus.timer = !1
                    }), 100))
                }))
            };
        a(e), cursorStatus.elemClick(e, t)
    }, bodyTriggerMousemoveTimer: !1, bodyTriggerMousemove: function (e) {
        cursorStatus.bodyTriggerMousemoveTimer && clearTimeout(cursorStatus.bodyTriggerMousemoveTimer), cursorStatus.bodyTriggerMousemoveTimer = setTimeout((function () {
            var t = $.Event("mousemove");
            t.pageX = e.pageX, t.pageY = e.pageY, $("body").trigger(t)
        }), 500)
    }, elemClickTimer: !1, elemClick: function (t, i) {
        "object" === e(i.on) && null != i.on && i.on.click && (i.cursor ? $(i.cursor).on("click", (function (e) {
            $(this).hide(), cursorStatus.hoverElem = document.elementFromPoint(e.clientX, e.clientY), $(this).show(), t.isMouseOver(e.pageY) && (i.on.click(t.eq(isMouseOverI)), cursorStatus.bodyTriggerMousemove(e))
        })) : t.on("click", (function () {
            i.on.click(t), cursorStatus.bodyTriggerMousemove(event)
        })))
    }, elemHoverIndex: 0, elemHover: function (e, t) {
        e.hover && ($(e.hover).isMouseOver(t.pageY, t.pageX) ? $(e.hover).eq(isMouseOverI).hasClass("hover") || (cursorStatus.elemHoverIndex++, $(e.hover).eq(isMouseOverI).addClass("hover").attr("data-cursor-index", cursorStatus.elemHoverIndex), $('[data-cursor-index!="' + cursorStatus.elemHoverIndex + '"]').removeClass("hover")) : $("[data-cursor-index]").removeClass("hover"))
    }, changeClass: function (e, t) {
        cursorStatus.isLeftHalf(e, t) ? ($("body").addClass("cursor-left"), $("body").removeClass("cursor-right")) : ($("body").removeClass("cursor-left"), $("body").addClass("cursor-right"));
        var i = "black";
        $(".black-block").isMouseOver(t.pageY, t.pageX) && (i = "white"), $(".white").isMouseOver(t.pageY, t.pageX) && (i = "black"), $(".black").isMouseOver(t.pageY, t.pageX) && (i = "white"), "black" == i ? ($("body").addClass("cursor-black"), $("body").removeClass("cursor-white")) : ($("body").addClass("cursor-white"), $("body").removeClass("cursor-black"))
    }, isLeftHalf: function (e, t) {
        var i = $(e).width() / 2;
        return cursorStatus.isLeftHalf_old = t.pageX < i
    }
}