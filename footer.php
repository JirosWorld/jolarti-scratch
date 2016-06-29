

<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'Jolarti' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'Jolarti' ), '<a href="http://www.jirosworld.com/">Jiro Ghianni</a>' ); ?>
</div>
<div id="kopierecht">
    &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
</div>
</footer>

<?php wp_footer(); ?> Hier staat de WP footer enqueue.

</body>
</html>