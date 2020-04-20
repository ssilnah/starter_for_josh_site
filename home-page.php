<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
      <section class="container-fluid aboutbg text-center">
      <div class="container">
          
<!--placeholder for about me -->
          <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
          <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
          <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
    <div class="blocker"></div>
          
          
          
          </div><!--container-->
      </section>
      
      <section class="container-fluid articlebg">
      <div class="container">
          <div class="row">
              <div>
              <h3 class="text-center article-title">LATEST ARTICLES</h3>
              </div>
              <div class="col-md-4 article-cent">
                  
<!--placeholder for col1 -->
                  
              </div>
              
              <div class="col-md-4 article-cent">
                  
<!--placeholder for col1 -->
                  
              </div>
              
              <div class="col-md-4 article-cent">
                  
<!--placeholder for col1 -->
                  
              </div>
          </div>
<!--row-->
          </div>
<!--container-->
      </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>