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

    jQuery(".el-webcast-thumb").click( function( event ){

        event.preventDefault();

    });

    jQuery(".el-webcast-thumb").each( function(){

        media_id = jQuery(this).attr('id').split('-').pop();

        jQuery(this).fancybox({

            width: 500,
            height: 300,
            href: "http://link.videoplatform.limelight.com/media/?mediaId=" + media_id +"&width=480&height=270&playerForm=HoverPlayer"

        })

    } );

   

});