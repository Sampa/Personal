$(document).ready(function()
{
    /**
     * toggles between classes on an jquery object
     * @param element the jquery object
     * @param start the class it has from the start
     * @param other the class to toggle to
     */
    function toggleClass(element,start,other){
        if(element.hasClass(start)){
            element.removeClass(start).addClass(other);
        } else {
            element.removeClass(other).addClass(start);
        }
    }

    /**
     * Search PAGE /frontend/themes/casual/views/arcticle/search.twig
     *
     */
    $("#toggleSearchForm").on('click',function(){
        $("#searchPageForm").slideToggle();
        toggleClass($(this).children("span"), "glyphicon-menu-down", "glyphicon-menu-up");
    });


    /*--------------*/


    /**
     * PAGE /frontend/themes/casual/views/layouts/main.twig
     * right side slide out menu, initialize the plugin https://github.com/hawk-ip/jquery.tabSlideOut.js
     */
    $('#slide-out-login').tabSlideOut({
        tabLocation: 'right', // right(default), right, top or bottom
        tabHandle: '#slide-out-login-handler',
        offset: '0px'
    });
    $('#slide-out-language').tabSlideOut({
        tabLocation: 'right', // right(default), right, top or bottom
        tabHandle: '#slide-out-language-handler',
        offset: '0px',

    });
    $('#slide-out-search').tabSlideOut({
        tabLocation: 'right', // left(default), right, top or bottom
        tabHandle: '#slide-out-search-handler',
        offset: '0px',
        //offsetReverse:true
       /*
        * defaults:
        tabHandle: '.handle', // JQuery selector for the tab, can use #
        speed: 300, // time to animate
        action: 'click',  // action which will open the panel, 'hover' or 'click'
        offset: '200px', // panel dist from top or left (bottom or right if offsetReverse is true)
        offsetReverse: false, // if true, panel is aligned with right or bottom of window
        otherOffset: null, // if set, panel size is set to maintain this dist from bottom or right (top or left if offsetReverse)
        handleOffset: null, // e.g. '10px'. If null, detects panel border to align handle nicely
        handleOffsetReverse: false, // if true, handle aligned with right or bottom of panel
        bounceDistance: '50px', // how far bounce event will move everything
        bounceTimes: 4, // how many bounces when 'bounce' is called
        positioning: 'fixed', // can also use absolute, so tabs move when window scrolls
        pathToTabImage: null, // optional image to show in the tab
        imageHeight: null,
        imageWidth: null,
        onLoadSlideOut: false, // slide out after DOM load
        clickScreenToClose: true, // close tab when rest of screen clicked
        toggleButton: '.tab-opener', // not often used
        onOpen: function(){}, // handler called after opening
        onClose: function(){} // handler called after closing*/
    });
});
