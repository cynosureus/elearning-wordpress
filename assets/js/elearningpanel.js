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
            enableEscapeKey: true,
            beforePanelOpen: function() {

                doc_height = jQuery(document).height();
                jQuery("#elearning-panel").css('height', doc_height );

            }
        
        });

        
        jQuery("#elearning-body").click(function(){

            elearningPanel.close();
           
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