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

<footer class="footer w-full bg-white-20 pt-4 md:pt-10 lg:pt-16 xl:pt-20 rounded-t-[32px] md:rounded-t-[40px] lg:rounded-t-[60px] xl:rounded-t-[80px] overflow-hidden">
    <div class="px-4 lg:px-[4.5vmax] mb-6">
        <div id="map" class="h-80 mb-8 md:mb-10 grayscale-[70%] bg-white-10 rounded-[40px] overflow-hidden"></div>
        <div class="grid gap-4 grid-cols-1 xs:grid-cols-2 md:grid-cols-3 mb-8 md:mb-10">
            <div class="flex items-center gap-6">
                <div class="bg-accent shrink-0 w-12 h-12  md:w-14 md:h-14 rounded-xl inline-flex items-center justify-center">
                    <img class="w-5 h-5 md:w-8 md:h-8 object-cover" width="100%" height="100%" src="/wp-content/uploads/2025/04/geo.svg" alt="">
                </div>
                <div class="flex-1 leading-none">
                    <h3 class="text-green-20 text-2xl md:text-3xl font-qanelas mb-1">Dubai</h3>
                    <p>SKB Plaza, Um Al Sheif, office 201</p>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="bg-accent shrink-0 w-12 h-12  md:w-14 md:h-14 rounded-xl inline-flex items-center justify-center">
                    <img class="w-5 h-5 md:w-8 md:h-8 object-cover" width="100%" height="100%" src="/wp-content/uploads/2025/04/time.svg" alt="">
                </div>
                <div class="flex-1 leading-none">
                    <h3 class="text-green-20 text-2xl md:text-3xl font-qanelas mb-1">Work Daily</h3>
                    <p>08 AM — 10 PM</p>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="bg-accent shrink-0 w-12 h-12  md:w-14 md:h-14 rounded-xl inline-flex items-center justify-center">
                    <img class="w-5 h-5 md:w-8 md:h-8 object-cover" width="100%" height="100%" src="wp-content/uploads/2025/04/mail.svg" alt="">
                </div>
                <div class="flex-1 leading-none">
                    <h3 class="text-green-20 text-2xl md:text-3xl font-qanelas mb-1">For Offers</h3>
                    <p>info@chicandsmooth.me</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="grid gap-2 2xs:gap-4 grid-cols-1 2xs:grid-cols-2 xs:grid-cols-2 sm:grid-cols-3 items-center mt-8 md:mt-10">
            <div class="text-center xs:text-left">
                <p> © <?= date("Y")?>. Chic & Smooth</p>
            </div>
            <div>
               <ul class="flex gap-3 items-center justify-center 2xs:justify-end sm:justify-center">
                   <li class="hover:scale-105 transition-all">
                       <a href="#">
                           <img class="w-8 h-8 object-center object-cover" src="wp-content/uploads/2025/04/Instagram.svg" width="100%" height="100%" alt="">
                       </a>
                   </li>
                   <li class="hover:scale-105 transition-all">
                       <a href="#">
                           <img src="/wp-content/uploads/2025/04/facebook.svg" width="100%" height="100%" alt="">
                       </a>
                   </li>
                   <li class="hover:scale-105 transition-all">
                       <a href="#">
                           <img src="/wp-content/uploads/2025/04/Whatsapp.svg" width="100%" height="100%" alt="">
                       </a>
                   </li>
               </ul>
            </div>
            <div class="text-center 2xs:col-span-2 sm:col-auto  sm:text-right leading-normal">
                Development
                <a class="block text-accent underline underline-offset-4 hover:no-underline" href="https://web-space.pro">web-space.pro</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
