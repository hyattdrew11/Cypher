var handlerBasic = StripeCheckout.configure({
  key: 'pk_test_CPKQIi4BPjHCfykaWX40M0Ur',
  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
  locale: 'auto',
  token: function(token) {
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
    window.location = "dashboard/register_form.php";
  }
});

document.getElementById('stripe-basic').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handlerBasic.open({
    name: 'Caesura Basic Plan',
    description: 'Basic Monthly Security Package',
    amount: 32500
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handlerBasic.close();
  
});


var handlerPro = StripeCheckout.configure({
  key: 'pk_test_CPKQIi4BPjHCfykaWX40M0Ur',
  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
  locale: 'auto',
  token: function(token) {
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
    window.location = "dashboard/register_form.php";
  }
});

document.getElementById('stripe-pro').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handlerPro.open({
    name: 'Caesura Pro',
    description: 'Pro Monthly Security Package',
    amount: 162500
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handlerPro.close();
  
});
var handlerPremium = StripeCheckout.configure({
  key: 'pk_test_CPKQIi4BPjHCfykaWX40M0Ur',
  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
  locale: 'auto',
  token: function(token) {
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
    window.location = "dashboard/register_from.php";
  }
});

document.getElementById('stripe-premium').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handlerPremium.open({
    name: 'Caesura Premium',
    description: 'Premium Monthly Security Package',
    amount: 325900
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handlerPremium.close();
  
});