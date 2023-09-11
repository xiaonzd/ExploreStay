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




    <?php $project1_column = get_field('project1_column');?>
    <!-- Hotel Laitau Grid Row -->
    <div class="project1-column">
        <div class="project1-left">
            <div class="project1">
                <div class="project1-cont">
                    <div class="project1-title"><?php echo $project1_column['project1_title'];?></div>
                    <div class="project1-type"><?php echo $project1_column['project1_type'];?></div>
                    <div class="project1-text"><?php echo $project1_column['project1_text'];?></div>
                    <div class="button-container">
                        <a href="<?php echo $project1_column['project1_button_link'];?>" target="_blank">
                            <button class="center-button" type="button"><?php echo $project1_column['project1_button_text'];?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="project1-right" style="background-image: url('<?php echo esc_url($project1_column['project1_img']['url']); ?>');"></div>
        </div>



        <!-- Hotel Slider -->
        <div class="hotel-slider1">
        	<?php echo do_shortcode('[smartslider3 slider="2"]');?>
        </div>



    <?php get_footer();?>