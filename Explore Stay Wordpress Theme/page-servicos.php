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


    <?php $hotel_management_column = get_field('hotel_management_column');?>
    <!-- Hotel Management Grid Row -->
    <div class="hotelManagement-column">
        <div class="hotelManagement-left">
            <div class="hotelManagement">
                <div class="hotelManagement-cont">
                    <div class="hotelManagement-title"><?php echo $hotel_management_column['hotel_management_title'];?></div>
                    <div class="hotelManagement-text"><?php echo $hotel_management_column['hotel_management_text'];?></div>

                    <?php if($hotel_management_column['hotel_management_button_link']):?>

                        <div class="button-container">
                            <a href="<?php echo $hotel_management_column['hotel_management_button_link'];?>">
                            <button class="center-button" type="button"><?php echo $hotel_management_column['hotel_management_button_text'];?></button>
                            </a>
                        </div>

                    <?php endif;?>

                </div>
            </div>
        </div>
        <div class="hotelManagement-right" style="background-image: url('<?php echo esc_url($hotel_management_column['hotel_management_img']['url']); ?>');"></div>
    </div>







    <?php $consultaria_column = get_field('consultaria_column');?>
    <!-- Consultaria Grid Row Phone -->
    <div class="consultaria-column-phone">
        <div class="consultaria-right">
            <div class="consultaria">
                <div class="consultaria-cont">
                    <div class="consultaria-title"><?php echo $consultaria_column['consultaria_title'];?></div>
                    <div class="consultaria-text"><?php echo $consultaria_column['consultaria_text'];?></div>

                    <?php if($consultaria_column['consultaria_button_link']):?>

                        <div class="button-container">
                            <a href="<?php echo $consultaria_column['consultaria_button_link'];?>">
                            <button class="center-button" type="button"><?php echo $consultaria_column['consultaria_button_text'];?></button>
                            </a>
                        </div>

                    <?php endif;?>

                </div>
            </div>
        </div>
        <div class="consultaria-left" style="background-image: url('<?php echo esc_url($consultaria_column['consultaria_img']['url']); ?>');"></div>
    </div>

    



    <?php $consultaria_column = get_field('consultaria_column');?>
    <!-- Consultaria Grid Row -->
    <div class="consultaria-column">
    <div class="consultaria-left" style="background-image: url('<?php echo esc_url($consultaria_column['consultaria_img']['url']); ?>');"></div>
        <div class="consultaria-right">
            <div class="consultaria">
                <div class="consultaria-cont">
                <div class="consultaria-title"><?php echo $consultaria_column['consultaria_title'];?></div>
                <div class="consultaria-text"><?php echo $consultaria_column['consultaria_text'];?></div>

                <?php if($consultaria_column['consultaria_button_link']):?>

                    <div class="button-container">
                        <a href="<?php echo $consultaria_column['consultaria_button_link'];?>">
                        <button class="center-button" type="button"><?php echo $consultaria_column['consultaria_button_text'];?></button>
                        </a>
                    </div>

                <?php endif;?>

            </div>
        </div>
    </div>
    </div>




    <?php $formacao_column = get_field('formacao_column');?>
    <!-- Formação Grid Row -->
    <div class="formação-column">
        <div class="formação-left">
            <div class="formação">
                <div class="formação-cont">
                    <div class="formação-title"><?php echo $formacao_column['formacao_title'];?></div>
                    <div class="formação-text"><?php echo $formacao_column['formacao_text'];?></div>

                    <?php if($formacao_column['formacao_button_link']):?>

                        <div class="button-container">
                            <a href="<?php echo $formacao_column['formacao_button_link'];?>">
                            <button class="center-button" type="button"><?php echo $formacao_column['formacao_button_text'];?></button>
                            </a>
                        </div>

                    <?php endif;?>

                </div>
            </div>
        </div>
        <div class="formação-right" style="background-image: url('<?php echo esc_url($formacao_column['formacao_img']['url']); ?>');"></div>
    </div>




    <?php get_footer();?>