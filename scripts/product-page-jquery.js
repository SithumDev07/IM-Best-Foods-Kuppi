$(document).ready(function () {

   const AnimationHandler = (element) => {
      $(element).toggleClass('beforeLoad')
      $(element).toggleClass('afterLoad')
   }

   //* Click Food Item
   $('.food-card').click(function() {
        

      AnimationHandler($('.home-page'))
      AnimationHandler($('.product-page'))
      AnimationHandler($('.product-preload'))
      AnimationHandler($('.product-preload-yellow'))

      const form_data = new FormData();

      form_data.append('itemid', $(this).attr('data-id'));

      $.ajax({
          url: './operations/get-selected-food.php',
          type: 'POST',
          data: form_data,
          contentType: false,
          processData: false,
          success: function(response) {
            //   alert(response);
            $('.detail-conatiner').html(response)


            //* After Content Loads
            $('.product-page-back').click(function() {
      
               AnimationHandler($('.home-page'))
               AnimationHandler($('.product-page'))
               AnimationHandler($('.product-preload'))
               AnimationHandler($('.product-preload-yellow'))
               
            })
          }
      });
      
  })

   $('#change-to-signup').click(function() {
      AnimationHandler($('.login-form'));
      AnimationHandler($('.signup-form'));
   })


})