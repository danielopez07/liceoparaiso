/**
 * File galleria.js.
 *
 * Handles the gallery functionality using the code from https://www.w3schools.com/howto/howto_js_slideshow.asp
 */
var slideIndex = 1;
moveSlides();

// moveSlides();

// Next/previous controls
function plusSlides( n ) {
  showSlides( slideIndex += n );
}

// Thumbnail image controls
function currentSlide( n ) {
  showSlides( slideIndex = n );
}

function showSlides( n ) {
  var i;
  var slides = document.getElementsByClassName( 'lp-mySlides' );
  var dots = document.getElementsByClassName( 'lp-dot' );
  if ( n > slides.length ) {
    slideIndex = 1;
  }
  if ( 1 > n ) {
    slideIndex = slides.length;
  }
  for ( i = 0; i < slides.length; i++ ) {
      slides[i].style.display = 'none';
  }
  for ( i = 0; i < dots.length; i++ ) {
      dots[i].className = dots[i].className.replace( ' lp-active', '' );
  }
  slides[ slideIndex - 1 ].style.display = 'block';
  dots[ slideIndex - 1 ].className += ' lp-active';
}

function moveSlides() {
  plusSlides ( 1 );
  setTimeout( moveSlides, 5000 ); // Change image every 5 seconds
}
