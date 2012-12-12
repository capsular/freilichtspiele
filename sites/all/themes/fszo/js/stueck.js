
(function ($, Drupal, window, document, undefined) {
    
     Drupal.behaviors.homePage = {
        attach: function (context, settings) {

            $('.page-node-2 #region-content .field-name-body').css({ opacity: 0 })
            $('#region-content').backstretch(settings.stueckPage['bgurl'],{'fade':1000});
            $(document.body).on("backstretch.show", function () { 
                $('.page-node-2 #region-content .field-name-body').animate({opacity:1}, 1000)
            });
                            
        }
    }

    

    // Wait for Document
    $(function(){

    })


})(jQuery, Drupal, this, this.document);
