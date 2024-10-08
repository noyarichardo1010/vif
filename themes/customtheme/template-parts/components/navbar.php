<?php 
  $icon_navbar = get_dynamic_image_url('/wp-content/uploads/2024/04/logo-invert.png');
?>

<nav id='navbar' class='navbar on-top'>
  <div id='navbar-container'>
      <div class="navbar-brand">
          <a class="navbar-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <!-- <?php bloginfo( 'name' ); ?> -->

              <img id="navbar-logo-img" src='<?php echo $icon_navbar; ?>' alt='company icon'/>
          </a>
      </div>

      <div class='menu-section'>
          <?php
          wp_nav_menu( array(
              'menu' => 'Navbar',
              'menu_class' => 'navbar-nav',
          ) );
          ?>
      </div>

      <div class='navbar-btn-action--container'>
        <a href="https://cabinet.vifx.co.id/cabinet/login" class="button-action main small">LOGIN</a>
      </div>

      <div id='btn-navbar-menu-dropdown' class='btn-menu-dropdown'>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>

        <span>Menu</span>
      </div>

      <div id='menu-dropdown-navbar--container' class='menu-dropdown--container'>
        <?php
          wp_nav_menu( array(
              'menu' => 'Navbar',
              'menu_class' => 'navbar-nav',
          ) );
          ?>

          <div class='menu-dropdown-btn-action--container'>
            <button class='button-action main small'>Sign Up</button>
            <button class='button-action secondary small'>Sign In</button>
          </div>
      </div>
  </div>
</nav>