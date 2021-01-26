<?php get_header();


// Open layout
get_template_part('templates/mitup_open_layout');

?>

<div class="event_404_page">
    <div class="ova_error_icon" ><i class="fa fa-warning"></i></div>
    <div class="ova_caption_title"><?php esc_html_e( 'Oop, Pagina nu fost gasită', 'DialogBar' ); ?></div>
    <div class="ova_go_home">
        <a class="btn btn-theme btn-theme-xl" href="<?php echo esc_url( home_url( '/' ) );  ?>" > <?php esc_html_e('Acasă','DialogBar') ?> </a>
    </div>
</div>
               

<?php 

get_template_part('templates/mitup_close_layout');
get_footer(); ?>

