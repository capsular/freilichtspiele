
(function ($, Drupal, window, document, undefined) {
    
     Drupal.behaviors.personen = {
        attach: function (context, settings) {

            $('.view-personen .view-content').masonry({
                itemSelector: '.person',
                columnWidth: function( containerWidth ) {
                    return containerWidth / 3;
                }
            });
                            
        }
    }

    

    // Wait for Document
    $(function(){

    })


})(jQuery, Drupal, this, this.document);
