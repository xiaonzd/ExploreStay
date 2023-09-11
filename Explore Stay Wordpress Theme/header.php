<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Explore Stay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head();?>


</head>

<body>

    <!-- Background Image : first thing you see when opening the website -->

    <?php $background_img1 = get_field('background_img1');?>
    <div class="fadein">
        <div class="fadeimg" id="f5" style="background-image: url('<?php echo esc_url($background_img1['image_5']['url']); ?>');"></div>
        <div class="fadeimg" id="f4" style="background-image: url('<?php echo esc_url($background_img1['image_4']['url']); ?>');"></div>
        <div class="fadeimg" id="f3" style="background-image: url('<?php echo esc_url($background_img1['image_3']['url']); ?>');"></div>
        <div class="fadeimg" id="f2" style="background-image: url('<?php echo esc_url($background_img1['image_2']['url']); ?>');"></div>
        <div class="fadeimg" id="f1" style="background-image: url('<?php echo esc_url($background_img1['image_1']['url']); ?>');"></div>
    </div>


    <!-- Background Image : phone -->

    <?php $background_img1_phone = get_field('background_img1_phone');?>
    <div class="fadein-phone">
        <div class="fadeimgp" id="f5p" style="background-image: url('<?php echo esc_url($background_img1_phone['image_5_phone']['url']); ?>');"></div>
        <div class="fadeimgp" id="f4p" style="background-image: url('<?php echo esc_url($background_img1_phone['image_4_phone']['url']); ?>');"></div>
        <div class="fadeimgp" id="f3p" style="background-image: url('<?php echo esc_url($background_img1_phone['image_3_phone']['url']); ?>');"></div>
        <div class="fadeimgp" id="f2p" style="background-image: url('<?php echo esc_url($background_img1_phone['image_2_phone']['url']); ?>');"></div>
        <div class="fadeimgp" id="f1p" style="background-image: url('<?php echo esc_url($background_img1_phone['image_1_phone']['url']); ?>');"></div>
    </div>




    <?php $navlogo = get_field('navlogo');?>
    <!-- Nav Bar-->
     <nav class="navbar" id="navbar">
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

                'theme_location' => 'sticky-menu',
                'menu' => 'main-menu',
                'container' => 'ul',
                'menu_class' => 'main-menu',

            )

        );?>


    </nav>