<?php
/**
 * Template Name: Links
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();?>


<div class="container top-pad">
  <div class="row logo-row">
    <div class="col-md-4 logo-parent">

        <?php
          $name = 'logo_1';
          $url = 'url_1';
          include(locate_template('page-templates/img-logo.php'));
        ?>
      </a>
    </div>
    <div class="col-md-4 logo-parent">
      <?php
        $name = 'logo_2';
        $url = 'url_2';
        include(locate_template('page-templates/img-logo.php'));
      ?>
    </div>
    <div class="col-md-4 logo-parent">
      <?php
        $name = 'logo_3';
        $url = 'url_3';
        include(locate_template('page-templates/img-logo.php'));
      ?>
    </div>
  </div>

  <div class="row logo-row">
    <div class="col-md-4 logo-parent logo-text">
      <?php
        $name = 'logo_4';
        $url = 'url_4';
        include(locate_template('page-templates/img-logo.php'));
      ?>
    </div>
    <div class="col-md-4 logo-parent">
      <?php
        $name = 'logo_5';
        $url = 'url_5';
        include(locate_template('page-templates/img-logo.php'));
      ?>
    </div>
    <div class="col-md-4 logo-parent logo-text flex-container flex-center flex-item-center">
      <!-- Jurgen Petrenko -->
      <a href="http://www.jurgenpetrenko.com/biography.htm">
        <?php the_field('logo_6'); ?>
      </a>
    </div>
  </div>
  <div class="row logo-row">
    <div class="col-md-4 logo-parent">
      <?php
        $name = 'logo_7';
        $url = 'url_7';
        include(locate_template('page-templates/img-logo.php'));
      ?>
    </div>
    <div class="col-md-4 logo-parent flex-container flex-center">
      <!-- social Media List -->
      <?php include(locate_template('page-templates/loop-social.php')); ?>
    </div>
    <div class="col-md-4 logo-parent logo-text flex-container flex-center flex-item-center">
      <!-- Michael Smith -->
      <a href="https://michaellsmith.github.io/">
        <?php the_field('logo_10'); ?>
      </a>
    </div>
  </div>
</div>


<?php get_footer();?>
