//Nav Menu Mobile Toggle
jQuery(document).ready(function(){

	jQuery('.fa-bars').click(function(){
		jQuery(this).toggleClass('fa-times');
		jQuery('.navbar').toggleClass('nav-toggle');
	});

	jQuery(window).on('load scroll',function(){
		jQuery('.fa-bars').removeClass('fa-times');
		jQuery('.navbar').removeClass('nav-toggle');
	});
});


//change out the hero image at 768px
function adjustHeroImage() {
    var screenWidth = window.innerWidth;
    var imgElement = document.querySelector('.hero-image');
    var newImgSrc = screenWidth > 768 ? "<?php echo get_template_directory_uri(); ?>/images/hero-image.png" : "<?php echo get_template_directory_uri(); ?>/images/hero-image-mobile.png";
    imgElement.src = newImgSrc;
}

// Run the function on load and on resize
window.onload = adjustHeroImage;
window.onresize = adjustHeroImage;






//Scroll the home page to a specific section when chevron button is clicked 
document.getElementById("chevronButton").addEventListener("click", function() {
  document.getElementById("targetSection").scrollIntoView({
    behavior: "smooth", // This makes the scroll smoothly
    block: "start" // Aligns the target at the top of the viewport
  });
});






//Check the scroll position and hide/show the chevron arrow
function handleScroll() {
  // Set the threshold for when to hide the arrow, e.g., 100px from the top
  const threshold = 100;
  // Get a reference to the chevron arrow element
  const chevronButton = document.getElementById('chevronButton');
  if (window.pageYOffset > threshold) {
    // If scrolled past the threshold, hide the arrow
    chevronButton.classList.add('hidden');
  } else {
    // If scrolled back up past the threshold, show the arrow
    chevronButton.classList.remove('hidden');
  }
}
// Add the scroll event listener to the window
window.addEventListener('scroll', handleScroll);






// Check if buttonInNavbar is already declared
if (typeof buttonInNavbar === 'undefined') {
    // If not declared, define the variable
    let buttonInNavbar = false;

    // Define the elements
    const headerButton = document.getElementById('header-button');
    const headerNavbar = document.getElementById('header-navbar');

    function moveButtonBasedOnViewport() {
        const viewportWidth = window.innerWidth;
        const breakpoint = 1200; // Define your breakpoint width here

        let originalParent; // Declare originalParent here to avoid redeclaration

        if (!originalParent) {
            originalParent = headerButton.parentNode; // Store the original parent to move the button back if needed
        }

        if (viewportWidth <= breakpoint && !buttonInNavbar) {
            headerNavbar.appendChild(headerButton); // Move the button to the navbar
            buttonInNavbar = true;
        } else if (viewportWidth > breakpoint && buttonInNavbar) {
            originalParent.appendChild(headerButton); // Move the button back to its original location
            buttonInNavbar = false;
        }
    }

    // Run the function on initial load
    moveButtonBasedOnViewport();

    // Add an event listener to run the function on window resize
    window.addEventListener('resize', moveButtonBasedOnViewport);
}
