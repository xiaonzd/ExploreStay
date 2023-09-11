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


        <?php $sobre_column = get_field('sobre_column');?>
    <!-- Sobre Content -->
    <div class="sobrecont">

    <!-- Sobre Grid Row -->
    <div class="sobrepage-column">
        <div class="sobrepage-left">
            <div class="sobrepage-container">
                <div class="sobrepage-content">
                    <h1 class="sobrepage-title"><?php echo $sobre_column['sobre_title'];?></h1>
                    <div class="sobrepage-text"><?php echo $sobre_column['sobre_text'];?></div>
                </div>
                
            </div>
        </div>
        <div class="sobrepage-right">
            <div class="sobrepage-img" style="background-image: url('<?php echo esc_url($sobre_column['sobre_img']['url']); ?>');"></div>
        </div>
        </div>
    </div>

    

<?php get_footer();?>