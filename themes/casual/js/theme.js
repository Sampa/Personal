$(document).ready(function()
{

    /**
     * right side slide out menu, initialize the plugin https://github.com/hawk-ip/jquery.tabSlideOut.js
     */
    $('#slide-out-login').tabSlideOut({
        tabLocation: 'right', // left(default), right, top or bottom
        tabHandle: '#slide-out-login-handler'
    });
    $('#slide-out-language').tabSlideOut({
        tabLocation: 'right', // left(default), right, top or bottom
        tabHandle: '#slide-out-language-handler'
    });
    $('#slide-out-search').tabSlideOut({
        tabLocation: 'right', // left(default), right, top or bottom
        tabHandle: '#slide-out-search-handler'
        //offset: '200px',
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
