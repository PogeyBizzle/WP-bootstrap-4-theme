<footer class="container rounded text-white">
    <div class="row">
        <div class="col-sm p-3 border bg-primary rounded">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer One') ) : ?>
            <?php endif; ?>
        </div>
        <div class="col-sm p-3 border bg-primary rounded">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Two') ) : ?>
            <?php endif; ?>
        </div>
        <div class="col-sm p-3 border bg-primary rounded">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Three') ) : ?>
            <?php endif; ?>
        </div>
    </div>
    <p class="text-center">Copyright &copy ThemeBuilding.Com</p>
</footer>


<?php wp_footer(); ?>

</body>
</html>