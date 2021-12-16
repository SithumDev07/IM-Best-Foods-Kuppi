$(document).ready(function() {
    console.log("King of JS Libraries");

    function toggleClasses(element) {

    }

    $('.food-card').click(function(e) {
        $('main').toggleClass('beforeLoad')
        $('main').toggleClass('afterLoad')
        $('.product-preload').toggleClass('beforeLoad')
        $('.product-preload').toggleClass('afterLoad')
        $('.product-preload-yellow').toggleClass('beforeLoad')
        $('.product-preload-yellow').toggleClass('afterLoad')
        $('.product-page').toggleClass('beforeLoad')
        $('.product-page').toggleClass('afterLoad')

        console.log(foods[$('.food-card').index(this)].name);

        $('.food-content h1').html(foods[$('.food-card').index(this)].name)
        $('.selected-food-image img').attr('src', foods[$('.food-card').index(this)].image)
       
    })

    $('.product-page-back').click(function() {
        $('main').toggleClass('beforeLoad')
        $('main').toggleClass('afterLoad')
        $('.product-preload').toggleClass('beforeLoad')
        $('.product-preload').toggleClass('afterLoad')
        $('.product-preload-yellow').toggleClass('beforeLoad')
        $('.product-preload-yellow').toggleClass('afterLoad')
        $('.product-page').toggleClass('beforeLoad')
        $('.product-page').toggleClass('afterLoad')
    })
})