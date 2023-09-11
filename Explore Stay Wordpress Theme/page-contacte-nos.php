<!DOCTYPE html>

<html lang="en">

<head>
    <title>Explore Stay</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <?php wp_head();?>


</head>

<body>



<!-- Nav Bar Fixed Top-->
    <?php $navlogo = get_field('navlogo');?>
        <nav class="navbar-top">
            <div class="navlogo">
                <img width="120px" height="auto" src="<?php echo esc_url($navlogo['url']); ?>">
                </a>
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label> 

            <?php
            wp_nav_menu(

                array(

                    'theme_location' => 'top-menu',
                    'menu' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'main-menu',

                )

            );?>

    </nav>



    <?php if($footer['contact_form_text']):?>

        <div class="contact-form-text">
            <p><?php the_field('contact_form_text'); ?></p>
        </div>

    <?php endif;?>


    <!-- Contact Form -->
    <div class="container" id="content-container">


            <?php get_template_part('/includes/section','content');?>


    </div>



<?php get_footer();?>