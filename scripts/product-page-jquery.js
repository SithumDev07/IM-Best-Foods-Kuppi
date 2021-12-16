$(document).ready(function () {

   $('.food-card').click(function() {
       $('.food-card').index(this)

    //    foods[$('.food-card').index(this)].

       $('.product-page').toggleClass('beforeLoad')
       $('.product-page').toggleClass('afterLoad')
    })
    
    $('.product-page-back').click(function() {
        
        $('.product-page').toggleClass('beforeLoad')
        $('.product-page').toggleClass('afterLoad')
   })


})