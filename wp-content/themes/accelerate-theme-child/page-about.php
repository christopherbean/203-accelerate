<?php
/**
 * This is a custom page template for the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page about">
		<div class="main-content" role="main">
            <?php while ( have_posts()) : the_post(); ?>
                <?php the_content();  ?>
            <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

    <section class="service-intro">
        <div class= "site-content">
            <h4>Our Services</h4>
            <p>We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>
        </div>
    </section>
    
    <section class="services-container">
        <div class="site-content">
            <?php while ( have_posts() ) : the_post(); 
                $hero_image_text = get_field('hero_image_text');
                $service_title_1 = get_field('service_title_1');
                $service_text_1 = get_field('service_text_1');
                $service_title_2 = get_field('service_title_2');
                $service_text_2 = get_field('service_text_2');
                $service_title_3 = get_field('service_title_3');
                $service_text_3 = get_field('service_text_3');
                $service_title_4 = get_field('service_title_4');
                $service_text_4 = get_field('service_text_4');
                $service_image_1 = get_field('image_1');
                $service_image_2 = get_field('image_2');
                $service_image_3 = get_field('image_3');
                $service_image_4 = get_field('image_4');
                $contact_us_text = get_field('contact_us_text');
                $contact_us_button = get_field('contact_us_button');
                $size = "large";
            ?>
            
            <?php if($service_title_1){
                echo "<div class='service'>
                        <div class= 'service-icon'>
                            <figure>";
                            echo wp_get_attachment_image($service_image_1, $size);
                            echo "</figure>
                        </div>
                        <div class= 'service-description'>
                            <h3> $service_title_1 </h3>
                            <p>  $service_text_1 </p>
                        </div>	
                    </div>"; 
            }?>
            <?php if($service_title_2){
                echo "<div class='service'>
                        <div class= 'service-icon'>
                            <figure>";
                            echo wp_get_attachment_image($service_image_2, $size);
                            echo "</figure>
                        </div>
                        <div class= 'service-description'>
                            <h3> $service_title_2 </h3>
                            <p>  $service_text_2 </p>
                        </div>	
                    </div>"; 
            }?> 
            <?php if($service_title_3){
                echo "<div class='service'>
                        <div class= 'service-icon'>
                            <figure>";
                            echo wp_get_attachment_image($service_image_3, $size);
                            echo "</figure>
                        </div>
                        <div class= 'service-description'>
                            <h3> $service_title_3 </h3>
                            <p>  $service_text_3 </p>
                        </div>	
                    </div>"; 
            }?>
            <?php if($service_title_4){
                echo "<div class='service'>
                        <div class= 'service-icon'>
                            <figure>";
                            echo wp_get_attachment_image($service_image_4, $size);
                            echo "</figure>
                        </div>
                        <div class= 'service-description'>
                            <h3> $service_title_4 </h3>
                            <p>  $service_text_4 </p>
                        </div>	
                    </div>"; 
            }?> 
            <?php endwhile; // end of the loop. ?>
        </div>
    </section>

    <section class="service-cta">
        <div class="site-content">
            <?php while ( have_posts()) : the_post();  ?>    
                <h2> <?php echo $contact_us_text; ?></h2>
            
            <a class="button" href="<?php echo site_url('/contact-us/') ?>"> <?php echo $contact_us_button; ?> </a>
            <?php endwhile; ?>
        </div>
    </section>
			
<?php get_footer(); ?>
