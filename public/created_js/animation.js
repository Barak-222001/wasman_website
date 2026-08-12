let Gallery_images=document.querySelectorAll(".gallery_images");
let Gallery=document.querySelector('.gallery')

document.addEventListener("DOMContentLoaded", () => {
  const observerOptions = {
    root: null, // Uses the browser viewport
    rootMargin: "0px",
    threshold: 0.15 // Triggers when 15% of the element is visible
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      // Check if the element has scrolled into view
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
        observer.unobserve(entry.target); // Stops observing once animated
      }
    });
  }, observerOptions);

  // Target all elements with the .reveal class
  const hiddenElements = document.querySelectorAll(".reveal");
  hiddenElements.forEach(el => observer.observe(el));
});

Gallery_images.forEach(item=>{
    item.addEventListener('click',()=>{
        // alert('hi')
    })
})