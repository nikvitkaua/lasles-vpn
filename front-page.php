<?php get_header(); ?>

<?php
// Promo
$promo_title = get_field('promo_title');
$promo_text = get_field('promo_text');
$promo_button_text = get_field('promo_button_text');
$promo_img = get_field('promo_img');

// Numbers
$numbers_repeater = get_field('numbers_repeater');

// Features
$features_img = get_field('features_img');
$features_title = get_field('features_title');
$features_text = get_field('features_text');
$features_repeater = get_field('features_repeater');

// Testimonials
$stars = get_field('stars');
$location = get_field('location');
?>

<main>
  <section class="promo">
    <div class="container">
      <div class="promo__wrapper">
        <div class="promo__content">
          <h1 class="title title--fz50 promo__title"><?= $promo_title; ?></h1>
          <div class="text promo__text"><?= $promo_text; ?></div>
          <a href="#" class="btn btn--shadow promo__btn"><?= $promo_button_text; ?></a>
        </div>

        <div class="promo__img">
          <?php 
          if(!empty($promo_img)){ ?>
            <img src="<?= $promo_img['url']; ?>" alt="<?= $promo_img['alt']; ?>">
          <?php }
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="numbers">
    <div class="container">
      <div class="numbers__wrapper">
        <?php 
        if ($numbers_repeater) {
          foreach($numbers_repeater as $item) {
            $numbers_icon = $item['numbers_icon'];
            $numbers_counter = $item['numbers_counter'];
            $numbers_text = $item['numbers_text'];
            ?>
            <div class="numbers__item">
              <div class="numbers__item-icon">
                <img src="<?= $numbers_icon['url']; ?>" alt="<?= $numbers_icon['alt']; ?>">
              </div>
              <div class="numbers__item-content">
                <h2 class="title title--fz25"><?= $numbers_counter ?></h2>
                <div class="text text_fz20"><?= $numbers_text; ?></div>
              </div>
            </div>
          <?php }
        }
        ?>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="container">
        <div class="features__wrapper">
          <div class="features__img">
          <?php
          if(!empty($features_img)) { ?>
            <img src="<?= $features_img['url']; ?>" alt="<?= $features_img['alt']; ?>">
          <?php }
          ?>
          </div>
          <div class="features__content">
            <h2 class="title title--fz35 features__title"><?= $features_title; ?></h2>
            <div class="text features__text"><?= $features_text; ?></div>
            <ul class="features__list">
              <?php 
              if ($features_repeater) {
                foreach($features_repeater as $item) {
                  $feature_list_item = $item['feature_list_item'];
                  ?>
                  <li class="features__list-item"><?= $feature_list_item; ?></li>
                <?php }
              }
              ?>
            </ul>
          </div>
        </div>
    </div>
  </section>

  <section class="plan">
    <div class="container">
      <h2 class="title title--fz35 plan__title">Choose Your Plan</h2>
      <div class="text plan__text">Let's choose the package that is best for you and explore it happily and cheerfully.</div>
      <div class="plan__wrapper">
        <div class="plan__item">
          <div class="plan__item-img">
            <img src="<?= bloginfo('template_url'); ?>/assets/img/plan.png" alt="plan-box">
          </div>
          <h3 class="plan__item-title title title--fz18">Free Plan</h3>
          <ul class="plan__item-list">
              <li>Unlimited Bandwitch</li>
              <li>Encrypted Connection</li>
              <li>No Traffic Logs</li>
              <li>Works on All Devices</li>
          </ul>
          <div class="plan__item-footer">
            <h2 class="plan__item-price title title--fz25">Free</h2>
            <button href="#" class="plan__item-btn btn">Select</button>
          </div>
        </div>

        <div class="plan__item">
          <div class="plan__item-img">
            <img src="<?= bloginfo('template_url'); ?>/assets/img/plan.png" alt="plan-box">
          </div>
          <h3 class="plan__item-title title title--fz18">Standard Plan</h3>
          <ul class="plan__item-list">
              <li>Unlimited Bandwitch</li>
              <li>Encrypted Connection</li>
              <li>Yes Traffic Logs</li>
              <li>Works on All Devices</li>
              <li>Connect Anywhere</li>
          </ul>
          <div class="plan__item-footer">
            <h2 class="plan__item-price title title--fz25"><b>$9</b>/ mo</h2>
            <button href="#" class="plan__item-btn btn">Select</button>
          </div>
        </div>

        <div class="plan__item plan__item--active">
          <div class="plan__item-img">
            <img src="<?= bloginfo('template_url'); ?>/assets/img/plan.png" alt="plan-box">
          </div>
          <h3 class="plan__item-title title title--fz18">Premium Plan</h3>
          <ul class="plan__item-list">
              <li>Unlimited Bandwitch</li>
              <li>Encrypted Connection</li>
              <li>Yes Traffic Logs</li>
              <li>Works on All Devices</li>
              <li>Connect Anywhere</li>
              <li>Get New Features</li>
          </ul>
          <div class="plan__item-footer">
            <h2 class="plan__item-price title title--fz25"><b>$12</b>/ mo</h2>
            <button class="plan__item-btn btn">Select</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container">
      <h2 class="title title--fz35 map__title">Huge Global Network of Fast VPN</h2>
      <div class="text map__subtitle">
        See <b>LaslesVPN</b> everywhere to make it easier for you when you move locations.
      </div>
      <div class="map__img">
        <img src="<?= bloginfo('template_url'); ?>/assets/img/Huge Global.png" alt="global map">
      </div>
    </div>
  </section>

  <section class="sponsors">
    <div class="container">
      <div class="sponsors__wrapper">
        <img src="<?= bloginfo('template_url'); ?>/assets/img/netflix.png" alt="sponsor">
        <img src="<?= bloginfo('template_url'); ?>/assets/img/reddit.png" alt="sponsor">
        <img src="<?= bloginfo('template_url'); ?>/assets/img/amazon.png" alt="sponsor">
        <img src="<?= bloginfo('template_url'); ?>/assets/img/discord.png" alt="sponsor">
        <img src="<?= bloginfo('template_url'); ?>/assets/img/shopify.png" alt="sponsor">
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="container">
      <h2 class="testimonials__title title title--fz35">Trusted by Thousands of Happy Customer</h2>
      <div class="testimonials__subtitle text">
        These are the stories of our customers who have joined us with great pleasure when using this crazy feature.
      </div>
      <div class="testimonials__wrapper">
      <?php
        if ( have_posts() ) {
          query_posts('cat=4'); 
          while (have_posts()) { the_post();
        ?>
        <div class="testimonials__item">
          <div class="testimonials__item-header">
            <div class="testimonials__item-img"><?= the_post_thumbnail(); ?></div>
            <div class="testimonials__item-title">
              <h3><?php the_title(); ?></h3>
              <div><?= the_content(); ?></div>
            </div>
          </div>
          <div class="testimonials__item-text">
          <?= the_excerpt(); ?>
          </div>
        </div>
        <?php
          }; 
        };
        wp_reset_query();                
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>