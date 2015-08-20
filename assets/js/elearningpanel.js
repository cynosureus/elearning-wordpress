jQuery(document).ready(function(){
    
    
    if (jQuery(window).width() >= 1200 ) {

        jQuery("#elearning-panel").removeAttr('style');
    
    } else {

        var elearningPanel = jQuery('#elearning-panel').scotchPanel({
            containerSelector: 'body', 
            direction: 'left', 
            duration: 300, 
            transition: 'ease', 
            clickSelector: '.menu-toggle-panel', 
            distanceX: '70%', 
            enableEscapeKey: true 
        });

        var loginPanel = jQuery('#login-panel').scotchPanel({
            containerSelector: 'body', 
            direction: 'right', 
            duration: 300, 
            transition: 'ease', 
            clickSelector: '.login-toggle-panel', 
            distanceX: '70%', 
            enableEscapeKey: true,

        });


        
        jQuery("#elearning-body").click(function(){

            elearningPanel.close();
            loginPanel.close();

        });

    }

});