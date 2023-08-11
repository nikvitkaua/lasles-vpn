<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>

<header class="header">
  <div class="container">
    <div class="header__wrapper">
      <div class="header__logo">
        <?= get_custom_logo(); ?>
      </div>

      <nav>
        <?= 
        wp_nav_menu( [
          'menu'            => 'Main',
          'menu_class'      => 'header__menu',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 1,
        ] );
        ?>
      </nav>

      <div class="header__btns">
        <a href="#" class="header__btns-item">Sign In</a>
        <a href="#" class="btn">Sign Up</a>
      </div>
    </div>
  </div>
</header>
