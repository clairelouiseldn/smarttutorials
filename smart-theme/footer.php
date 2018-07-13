<?php
/*
 * Footer for Smart Tutorials website.
 *
 * Comtains closing divs for header.php.
 */
 ?>

    <footer class="grid" role="contentinfo">

      <div class="social">
        <a href="https://facebook.com"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/facebook.png" alt="Facebook icon"></a>
        <a href="https://twitter.com"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/twitter.png" alt="Twitter icon"></a>
        <a href="https://instagram.com"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/icons/instagram.png" alt="Instagram icon"></a>
        <p>Copyright &copy; <?php echo date('Y'); ?> Claire Parker</p>
      </div><!--close social-->

    </footer>

    <?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
