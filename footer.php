<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chicandsmooth
 */

?>

<footer class="footer w-full">
    <div class="px-4 sm:px-6 pb-4 sm:pb-6">
        <hr class="bg-gray-10">
        <div class="pt-10 grid gap-4 sm:gap-10 grid-cols-2">
            <div>
                <nav class="" role="navigation">
                    <?php //footer_nav(); ?>
                </nav>
            </div>
            <div class="text-right">
                <a href="<?=get_home_url()?>" target="_self">
                    <?=the_custom_logo();?>
                </a>
            </div>
        </div>
    </div>
    <div class="grid gap-4 sm:gap-10 grid-cols-2 bg-white-20 py-3 px-4 sm:px-6">
        <div class="order-2 sm:order-1 text-sm font-medium">
            © copyright. 2025–<?= date("Y")?>
        </div>
        <div class="order-3 text-sm font-medium text-right">
            Develop
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
