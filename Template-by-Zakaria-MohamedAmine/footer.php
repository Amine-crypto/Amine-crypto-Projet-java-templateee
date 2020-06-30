<?php 
/* Footer Menu */ ?>

<footer class="footer">
        <nav class="footer-navigation">
        <?php 
                 wp_nav_menu( $arg= array(
                     'menu_class' => 'main-navigation',
                     'theme_location' => 'footer'
                 ));
           
           ?>
           
        </nav>
        <p class="copyright">
            <small>all rights reserved © 2020 &copy; Zakaria Ihirri & Mohamed Amine ElKellali</small>
        </p>
    </footer>
<?php 
wp_footer();
 ?>
</body>

</html>