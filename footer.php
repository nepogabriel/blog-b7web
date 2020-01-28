<footer>
    <div class="footer_up">
        FALTA AQUI
    </div>

    <div class="footer_down">
        <div class="container">
            <p><strong><?php bloginfo('name'); ?></strong> | &copy; Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<script class="text/javascript">
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>

<?php wp_footer(); ?>

<style type="text/css">
.top_header {
    background-color: <?php echo get_theme_mod('gb_linetop'); ?>;
}
.post_title a {
    color: <?php echo get_theme_mod('gb_titlepost'); ?>;
}
.post_button {
    background-color: <?php echo get_theme_mod('gb_button'); ?>;
}
.footer_up {
    background-color: <?php echo get_theme_mod('gb_footerup'); ?>;
}
.footer_down {
    background-color: <?php echo get_theme_mod('gb_footerdown'); ?>;
    color: <?php echo get_theme_mod('gb_footerdown_text'); ?>;
}
.loadmoreButton {
    color: <?php echo get_theme_mod('gb_pagination'); ?>;
}
.loadmoreButton:hover {
    border: 2px solid <?php echo get_theme_mod('gb_pagination_hover'); ?>;
}
</style>

</body>
</html>