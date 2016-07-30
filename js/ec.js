jQuery(document).ready(function(){
  //jQuery("sh").hide(); 
  jQuery(this).click(function(event){
    jQuery(event.target).next("sh").toggle();
   if (jQuery(event.target).html() == '+') {
        jQuery(event.target).html("-");
    }
     else{
          if (jQuery(event.target).html() == '-') {
             jQuery(event.target).html("+");
          }
      }
   });
});
