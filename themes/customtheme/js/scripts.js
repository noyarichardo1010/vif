document.addEventListener('DOMContentLoaded', function() {
  var navbar = document.querySelector('.navbar');
  var scrollPosition = window.scrollY;

  function addScrolledClass() {
      navbar.classList.add('scrolled');
  }

  function removeScrolledClass() {
      navbar.classList.remove('scrolled');
  }

  function handleScroll() {
      scrollPosition = window.scrollY;

      if (scrollPosition > 50) {
          addScrolledClass();
      } else {
          removeScrolledClass();
      }
  }

  window.addEventListener('scroll', handleScroll);
});