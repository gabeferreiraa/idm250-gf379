
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap">
<style>
  
  </style>

  <nav class="header">
    <ul>

      <li class="logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Logo</a></li>

         <?php
    wp_nav_menu( [ 
        'theme_location' => 'primary-menu',  
    ]);
?>
    </ul>
  </nav>