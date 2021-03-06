var Sidebar = (function () {
    function Sidebar(holder, eventElement, side, width, speed) {
        this.side = side;
        this.width = width;
        this.speed = speed;
        this.holderId = $(holder);
        this.eventElementId = $(eventElement);
    }
    Sidebar.prototype.init = function () {
        if (this.side != undefined) {
            if (this.side == 'right') {
                $(this.holderId).addClass('right');
            }
        }
        if (this.width != undefined) {
            $(this.holderId).css({
                'max-width': this.width
            });
        }
        if (this.width != undefined) {
            $(this.holderId).css({
                'transition-duration': ((this.speed) / 1000) + 's'
            });
        }
        // attach click event
        this.clickEvent();
    };
    Sidebar.prototype.clickEvent = function () {
        var holder = $(this.holderId);
        var elementBtn = $(this.eventElementId);
        var closeBtn = holder.find('a#sidebar-close');
        elementBtn.click(function(){
            holder.addClass('active');
            return false;
        });

        $(document).on('click', function (e) {
            var item = e.target;
            if (!$(item).closest(holder).length || $(item).closest(closeBtn).length) {
                if (holder.hasClass('active')) {
                    holder.removeClass('active');
                    return false;
                }
            }
        });
    };
    return Sidebar;
}());
;
window.onload = function () {
    var sidebarLeft = new Sidebar('#sidebar', '#open-left', 'left', '280px', 300);
    sidebarLeft.init();
    var sidebarRight = new Sidebar('#sidebar-right', '#open-right', 'right', '30%', 250);
    sidebarRight.init();
};
//# sourceMappingURL=sidebar.js.map