<footer class="site-footer">
    <div class="site-footer__inner">
        <nav aria-label="Liens de pied de page">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer-menu',
                'container'      => false,
                'menu_class'     => 'footer-menu',
                'fallback_cb'    => false,
                'depth'          => 1,
            ]);
            ?>
        </nav>
        <p>Tous droits réservés</p>
    </div>
</footer>

<?php get_template_part('templates_part/contact-modal'); ?>

<?php wp_footer(); ?>
</body>
</html>