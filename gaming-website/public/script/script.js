// navbar animation
  window.addEventListener('scroll', function () {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY >= 56) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });





// Call back everytime
  updateCartCount();
  updateTotalPrice() 

// update cart numbers
  function updateCartCount() {
    $.ajax({
        url:'/get-cart-count',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
          // console.log(response.cartCount)
            $('.cart-count').text(response.cartCount);
        },
        error: function (error) {
            console.error('Error fetching cart count:', error);
        }
    });
}


// update cart Prices

function updateTotalPrice() {
  $.ajax({
      url: '/get-total-price',
      type: 'GET',
      dataType:'json',
      success: function (response) {
          if (response.hasOwnProperty('totalPrice')) {
              // Update the HTML element displaying the total price
              $('#total-price').text('Total: $' + response.totalPrice.toFixed(2));
          } else {
              console.log('Response does not contain totalPrice property.');
          }
      },
      error: function (error) {
          console.log(error.responseJSON.message);
      }
  });
}


// Adding  cart items


$(document).ready(function(){
  $('.buy-btn').click(function (e){
    e.preventDefault();
    var game_id = $(this).closest('.product_data').find('.game_id').val();
    var game_name = $(this).closest('.product_data').find('.game_name').text();
    var game_image = $(this).closest('.product_data').find('.game_image').attr('src');
    var game_price = $(this).closest('.product_data').find('.game_price').text();
    var game_qty = $(this).closest('.product_data').find('.game_qty').val();
    var game_desc = $(this).closest('.product_data').find('.game_desc').text();
     
     


    $.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    
    $.ajax({
      method: "POST",
      url: "/add-to-cart",
      data:{
        'game_id': game_id,
        'game_name': game_name,
        'game_image': game_image,
        'game_price': game_price,
        'game_qty': game_qty,
        'game_desc': game_desc,
      },

      success: function(response){
      
                
        alert(response.status)
       
        updateCartCount();
       

      },
      error: function (error) {
      console.log(error);
  }
    })


  })
})








// remove  cart items

$(document).ready(function () {

  $('.remove-item').on('click', function () {
      var itemId = $(this).closest('.cart-item').data('item-id');
      var currentButton = $(this);

      $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
         });

      $.ajax({
          url: '/delete/' + itemId,
          type: 'DELETE',
          success: function (response) {
              console.log(response.message);
              currentButton.closest('.cart-item').remove();

              // Callbacks for price and counts
              updateCartCount();
              updateTotalPrice();

          },
          error: function (error) {
              console.log(error.responseJSON.message);
          }
          
      });
  });
});

