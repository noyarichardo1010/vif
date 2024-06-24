<?php wp_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      var button = document.getElementById("btn-navbar-menu-dropdown");
      var menu = document.getElementById("menu-dropdown-navbar--container");

      button.addEventListener("click", function() {
          var computedStyle = window.getComputedStyle(menu); // Mendapatkan nilai opacity yang dihitung

          if (computedStyle.opacity === "0") {
              menu.style.display = "block";
              setTimeout(function() {
                  menu.style.opacity = "1";
              }, 10); // Delay untuk memastikan transisi dimulai setelah display diubah menjadi "block"
          } else {
              menu.style.opacity = "0";
              setTimeout(function() {
                  menu.style.display = "none";
              }, 300); // Sesuaikan delay dengan durasi transisi CSS
          }
      });
  });
</script>
</body>
</html>