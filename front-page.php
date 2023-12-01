<?php
  get_header();

  while(have_posts()) {
    the_post();
?>

<section class="home-hero" style="background-image: url(http://agart.local/wp-content/uploads/2023/10/bg-home-1.jpg)">
  <div class="home-hero__filter">
    <div class="home-hero__content">
      <h2 class="home-hero__heading heading--secondary text--white text--center">Custom house portraits<br />in pen and ink</h2>
    </div>

  </div>

</section>


<?php
    get_footer();
}  ?>
