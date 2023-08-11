document.addEventListener('DOMContentLoaded', () => {

  // Plans
  const plans = document.querySelectorAll('.plan__item');
  
  plans.forEach(item => {
    item.addEventListener('click', () => {
      plans.forEach(el => {
        removeClass(el, "plan__item--active");
      });
      addClass(item, "plan__item--active");

    });
  });

  // Testimonials
  const testimonials = document.querySelectorAll('.testimonials__item');
  addClass(testimonials[0], 'testimonials__item--active');



  // Functions
  function addClass(item, className) {
    item.classList.add(className);
  }

  function removeClass(item, className) {
    item.classList.remove(className);
  }


});