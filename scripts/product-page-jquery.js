$(document).ready(function () {

   const AnimationHandler = (element) => {
      $(element).toggleClass('beforeLoad')
      $(element).toggleClass('afterLoad')
   }

   $('.food-card').click(function() {
       $('.food-card').index(this)

    //    foods[$('.food-card').index(this)].

      AnimationHandler($('.home-page'))
      AnimationHandler($('.product-page'))
      AnimationHandler($('.product-preload'))
      AnimationHandler($('.product-preload-yellow'))
      
   })
   
   $('.product-page-back').click(function() {
      
         AnimationHandler($('.home-page'))
         AnimationHandler($('.product-page'))
         AnimationHandler($('.product-preload'))
         AnimationHandler($('.product-preload-yellow'))
         
   })


})