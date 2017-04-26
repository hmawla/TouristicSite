var contactFormBusy = 0,
    expeditionSliderBusy = 0;

jQuery(document).ready(function() {



  jQuery('.offer-submit-btn').on('click', function(e){
  	e.preventDefault();

    if(!contactFormBusy){
			contactFormBusy = 1;

      var dis = jQuery(this),
          oldDisHtml = dis.html(),
          form = jQuery(this).parents('form'),
          msg = jQuery('.ajax-msg');

      msg.removeClass('error active').html('Sending...');

      jQuery.post('http://www.fitnesszone-lb.com/ajax/main.php', form.serialize(), function(data) {
         msg.html('Thank you for submitting the form. Good luck!');

          if(data.status == 11){
          jQuery('.summer-form').addClass('hide');
          jQuery('.summer-form-2').addClass('hide');
          jQuery('.summer-form-3').removeClass('hide');
          setTimeout ( function (){
          jQuery('.summer-offer').addClass('hide');
          dis.html(oldDisHtml);
          msg.removeClass('success');
          jQuery('.form-field').val('');
      						contactFormBusy = 0;
               }, 3000);
          }
          if(data.status == 1){
              jQuery('.summer-form').addClass('hide');

(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = 'https://connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6050059485723', {'value':'0.00','currency':'USD'}]);

jQuery('#pixel').html('<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6050059485723&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" />');

              setTimeout ( function (){
                jQuery('.summer-offer').addClass('hide');
                  dis.html(oldDisHtml);
                  msg.removeClass('success');
                  jQuery('.form-field').val('');
      						contactFormBusy = 0;
               }, 3000);
          }
          else{
              jQuery('.msg').removeClass('hide');
              msg.addClass('active');
              setTimeout ( function (){
                  jQuery('.msg').addClass('hide');
                  
      						contactFormBusy = 0;
               }, 3000);
          }
      }, 'json');
    }
  });

  });