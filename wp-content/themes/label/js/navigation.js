/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
  let hamburger = document.getElementById('hamburger');
  let overlay = document.getElementById('overlay');
  hamburger.addEventListener('click', function(e) {
    if (hamburger.classList.contains('active')) {
      hamburger.classList.remove('active')
      overlay.classList.remove('open')
    }
    else {
      hamburger.classList.add('active')
      overlay.classList.add('open')
    }
  })
} )();
