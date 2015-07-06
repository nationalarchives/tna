// with jQuery



$(window).load(function(){   


var $container = $('#document-container');
$container.imagesLoaded( function(){
  $container.masonry({
  columnWidth: 100,
  itemSelector: '.document-box',
  isAnimated: true
  });

   setTimeout(function(){ $('#document-container').masonry() },100); 
});


}
  );

 function showDocuments(u){

 var destination = u,
 href = '/state-secrets/' + destination + '/';

$('html, body').animate({
    scrollTop: $("#documents").offset().top
}, 1000);
  $("#document-container").hide();
  $(".document-viewer").fadeIn('slow');
    $("#document-loader").fadeIn('slow');
  $("#document-toggle").fadeIn('slow');
        $("#document-loader").html("<p style=\"margin-top: 0; padding-top: 3em;text-align:center;\">Loading State Secrets</p><p align=center><img src=/wp-content/themes/tna/images/centenary-map/ajax-loader.gif></p>");
        $("#document-loader").load(href);

 


          }




function closeDocuments(){ 
  $("#document-container").fadeIn('slow');
  $("#document-loader").hide();
    $("#document-toggle").hide();
 setTimeout(function(){ $('#document-container').masonry() },100); 


}

