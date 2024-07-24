document.addEventListener('DOMContentLoaded', function() {
    var navbar = document.querySelector('.navbar');
    var scrollPosition = window.scrollY;

    const navbarLogo = document.getElementById('navbar-logo-img');

    // const srcWhiteLogo = 'http://localhost/vifx/wp-content/uploads/2024/04/logo-invert.png'
    // const srcBlackLogo = 'http://localhost/vifx/wp-content/uploads/2024/07/logo-black.png'
    const srcWhiteLogo = 'http://wpdev.vifx.co.id/wp-content/uploads/2024/06/logo-invert.png'
    const srcBlackLogo = 'http://wpdev.vifx.co.id/wp-content/uploads/2024/07/logo-black.png'

    function addScrolledClass() {
        navbar.classList.add('scrolled');
        navbar.classList.remove('on-top');

        navbarLogo.src = srcBlackLogo;
    }
    
    function removeScrolledClass() {
        navbar.classList.remove('scrolled');
        navbar.classList.add('on-top');

        navbarLogo.src = srcWhiteLogo;
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