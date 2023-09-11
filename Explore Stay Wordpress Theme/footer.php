<!-- Footer -->
<footer>
    <?php $footer = get_field('footer');?>
        <p class="contactos"><span class="contacte-nos"><?php echo $footer['footer_title'];?></span>
        <?php echo $footer['footer_phone'];?>
        <?php echo $footer['footer_email'];?></p>
    </footer>

    <?php wp_footer();?>