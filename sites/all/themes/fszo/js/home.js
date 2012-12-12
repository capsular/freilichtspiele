
(function ($, Drupal, window, document, undefined) {
    
     Drupal.behaviors.homePage = {
        attach: function (context, settings) {

            
            $.backstretch(settings.homePage['bgurl'],{'centeredY':false,fade:1000});
            $(document.body).on("backstretch.show", function () { 
                $imgholdr = $('<table id="imgholdr" />').append($('<tr><td>')).insertAfter($('.backstretch'))
                var $img = $('<img/>').hide()
                $img.load(function(){
                    var $loaded = $(this)
                    $loaded.appendTo($('td')).css({'width':'100%', 'height':'auto'}).attr('alt','Freilichtspiele Zürcher Oberland').fadeIn('slow')
                    $('<img/>').attr('src', settings.homePage['animurl'])
                                .appendTo($('body')).css({'position':'absolute','left':'-200px','bottom':'10%'})
                                .animate({
                                    left: '+=2000',
                                  }, 50000, function() {
                                    // Animation complete.
                                  })
                })
                $img.attr('src', settings.homePage['txturl']);
                $img.on('click', function(){
                    window.location.href=settings.homePage['linkto']
                })
            });
                            
        }
    }

    

    // Wait for Document
    $(function(){

    })


})(jQuery, Drupal, this, this.document);
