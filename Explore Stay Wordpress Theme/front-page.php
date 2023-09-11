<?php get_header();?>


    <?php $front_text = get_field('front_text');?>
    <!-- Introduction Text-->
    <div class="intro" id="intro">
        <?php echo $front_text['intro_text']; ?>
    </div>

    <?php $background_img2 = get_field('background_img2');?>
    <div class="background-img2" style="background-image: url('<?php echo esc_url($background_img2['url']); ?>');"></div>

    <!-- Main Content : includes small introduction, serviços e portfolio com respetivos buttons of redirecting -->
    <div class="maincont">
        <?php echo $front_text['sell_text'];?>

    
    <?php $front_columns = get_field('front_columns');?>
        <!-- Serviços Column -->
        <div class="serviços-column">
            <div class="serviços-left">
                <div class="serviços">
                    <div class="serviços-cont">
                        <div class="serviços-title"><?php echo $front_columns['servicos_title'];?></div>
                        <div class="serviços-text"><?php echo $front_columns['servicos_text'];?></div>
                        <div class="button-container">
                            <a href="<?php echo $front_columns['servicos_button_link'];?>">
                                <button class="center-button" type="button"><?php echo $front_columns['servicos_button_text'];?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="serviços-right" style="background-image: url('<?php echo esc_url($front_columns['servicos_img']['url']); ?>');"></div>
        </div>

        <!-- Portfolio Column -->
        <div class="portfolio-column">
            <div class="portfolio-left" style="background-image: url('<?php echo esc_url($front_columns['portfolio_img']['url']); ?>');"></div>
            <div class="portfolio-right">
                <div class="portfolio">
                    <div class="portfolio-cont">
                    <div class="portfolio-title"><?php echo $front_columns['portfolio_title'];?></div>
                    <div class="portfolio-text"><?php echo $front_columns['portfolio_text'];?></div>
                    <div class="button-container">
                        <a href="<?php echo $front_columns['portfolio_button_link'];?>">
                            <button class="center-button" type="button"><?php echo $front_columns['portfolio_button_text'];?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Porfolio Column Phone -->
        <div class="portfolio-column-phone">
            <div class="portfolio-right">
                <div class="portfolio">
                    <div class="portfolio-cont">
                        <div class="portfolio-title"><?php echo $front_columns['portfolio_title'];?></div>
                        <div class="portfolio-text"><?php echo $front_columns['portfolio_text'];?></div>
                        <div class="button-container">
                            <a href="<?php echo $front_columns['portfolio_button_link'];?>">
                                <button class="center-button" type="button"><?php echo $front_columns['portfolio_button_text'];?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-left" style="background-image: url('<?php echo esc_url($front_columns['portfolio_img']['url']); ?>');"></div>
        </div>

    </div>

<?php get_footer();?>