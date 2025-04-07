<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chicandsmooth
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class('flex flex-col min-h-dvh antialiased font-normal'); ?>>
<?php wp_body_open(); ?>

<header class="max-w-full-client-width px-4 sm:px-6 top-0 sticky  z-40 w-full backdrop-blur-md overflow-hidden">
    <div class="flex justify-between gap-4 items-center flex-wrap w-full py-4">
        <div class="hidden xl:flex xl:basis-5/12 justify-start">
            <nav class="hidden xs:flex flex-row" role="navigation">
                <?php header_nav(); ?>
            </nav>
        </div>
        <div class="xl:basis-36 flex justify-center">
            <a href="<?=get_home_url()?>" target="_self">
                <?=the_custom_logo();?>
            </a>
        </div>
    </div>
</header>
