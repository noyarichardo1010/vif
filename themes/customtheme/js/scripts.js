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

    function popBranchModal() {
        var buttons = document.querySelectorAll(".open-branch-modal-branch");
    
        buttons.forEach(function (button) {
            button.addEventListener("click", function () {

            var title = this.getAttribute("data-title");
            var description = this.getAttribute("data-description");
            var est_year = this.getAttribute("data-est-year");
            var image = this.getAttribute("data-image");
    

            document.getElementById("popup-branch-title").innerText = title;
            document.getElementById("popup-branch-text").innerText = description;
            document.getElementById("popup-branch-est-year").innerText = `Est : ${est_year}`;
            document.getElementById("popup-branch-image").setAttribute("src", image);
            });
        });
    }

    function popAccountModal() {
        var buttons = document.querySelectorAll(".open-account-modal-branch");

        buttons.forEach(function (button) {
            button.addEventListener("click", function () {

                var name = this.getAttribute("data-name");
                var description = this.getAttribute("data-description");
                var account_numbers = this.getAttribute("data-account-number-list");

                var listNumber = JSON.parse(account_numbers)

                
                document.getElementById("popup-account-title").innerText = name;
                document.getElementById("popup-account-text").innerText = description;

                const ul = document.getElementById("account_number_list")
                ul.innerHTML = '';

                listNumber.forEach(item => {
                    const li = document.createElement('li');
    
                    if (listNumber.length > 1) {
                        li.textContent = `${item.currency} : ${item.number}`;
                    } else {
                        li.textContent = `${item.number}`;
                    }

                    ul.appendChild(li);
                });
            });
        });
    }

    function handleTabsAnalyze() {
        const tabs = document.querySelectorAll('.tabs--container button');
        const cardContainers  = document.querySelectorAll('.card-category-container');

        if (tabs.length > 0) {
            tabs.forEach((tab) => {
                tab.addEventListener("click", function () {
                  // Remove the active class from all tabs
                  tabs.forEach((t) => t.classList.remove("active"));
            
                  // Add the active class to the clicked tab
                  this.classList.add("active");
            
                  // Get the category from the clicked tab
                  const category = this.getAttribute("data-category");
            
                  // Hide all containers
                  cardContainers.forEach((container) => {
                    container.classList.remove("active");
            
                    // Instantly hide the container
                    container.style.display = "none";
                    container.style.visibility = "hidden";
                    container.style.opacity = "0";
                  });
            
                  // Show the container that matches the category
                  const activeContainer = document.querySelector(`.${category}`);
                  
                  // Use setTimeout to ensure it is added to the next frame
                  activeContainer.style.display = "grid"; // Show instantly
    
                  setTimeout(() => {
                    activeContainer.style.visibility = "visible";
                    activeContainer.classList.add("active");
                    activeContainer.style.opacity = "1"; // Apply fade-in effect
                  }, 10);
    
                });
            });
            
            tabs[0].click()
        }
    }

    function handleAccordions() {
        const accordions = document.querySelectorAll('.accordion--container');

        accordions.forEach(accordion => {
            const content = accordion.querySelector('.accordion-content');
        
            accordion.addEventListener('click', () => {
              const isOpen = content.classList.contains('open');
        
              // Menutup semua accordion lainnya
              accordions.forEach(item => {
                if (item !== accordion) {
                  item.classList.remove('active');
                  const itemContent = item.querySelector('.accordion-content');
                  itemContent.classList.remove('open');
                  itemContent.style.maxHeight = null;
                }
              });
        
              // Toggle kelas 'active' dan 'open' pada accordion yang diklik
              accordion.classList.toggle('active');
              content.classList.toggle('open');
        
              // Atur max-height berdasarkan status open/close
              if (content.classList.contains('open')) {
                content.style.maxHeight = content.scrollHeight + 'px';
              } else {
                content.style.maxHeight = null;
              }
            });
        });
    }

    function handleClickPinOnMap() {
        const pins = document.querySelectorAll('.pin');

        if (pins.length > 0) {
            pins.forEach(pin => {
                pin.addEventListener('click', function () {
                    // Mendapatkan ID branch dari data-attribute
                    const branchId = this.getAttribute('data-branch');
                    const mapUrl = this.getAttribute('data-map-url');

                    // Menyembunyikan semua branch list
                    document.querySelectorAll('.branch-content--list').forEach(container => {
                        container.style.display = 'none';
                    });

                    // Menampilkan branch list yang sesuai dengan pin yang diklik
                    const activeBranchList = document.getElementById(`branch-${branchId}-list`);
                    if (activeBranchList) {
                        activeBranchList.style.display = 'grid'; // Menggunakan grid untuk layout
                    }

                    // Memperbarui URL iframe
                    const iframe = document.getElementById('branch-map');
                    if (iframe) {
                        iframe.src = mapUrl; // Memperbarui URL iframe dengan URL peta yang sesuai
                    }
                });
            });
        }
    }
 

    popBranchModal()
    popAccountModal()

    handleTabsAnalyze()
    handleAccordions()

    handleClickPinOnMap()


    window.addEventListener('scroll', handleScroll);
});