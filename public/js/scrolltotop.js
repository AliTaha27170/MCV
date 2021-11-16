var ScrollButton = document.getElementById("scroll_top") ;
window.onscroll = function()
{
    if (scrollY >= 430)
    {
        ScrollButton.style="right: 10px;transform: rotate(0deg);"
    }
    else
    {
        ScrollButton.style="right: -60px;"
    }
}
ScrollButton.onclick = function()
{
    window.scrollTo({
        top : 0 ,
        behavior : "smooth"
        
    })}
    

    $(window).on('scroll', function() {
        var Wscroll = $(window).scrollTop();
        var header_area = $('.wrapper');
        var navbar_fixed_top = 'header-fix';

        if (Wscroll > 100) {
            header_area.addClass(navbar_fixed_top);
        } else {
            header_area.removeClass(navbar_fixed_top);
        }

    })


    AOS.init({
        duration: 1200,
      })
      