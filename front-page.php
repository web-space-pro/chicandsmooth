<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chicandsmooth
 */

get_header();
?>

    <main  style="min-height: calc(100dvh - 190px)" class="flex-grow-1 flex flex-col">
        <section class="remove-setting hs-dvh relative overflow-hidden bg-lines bg-cover bg-top bg-no-repeat">

            <div class="px-4 lg:px-[4.5vmax] py-14 relative z-20">
                <h1 class="max-w-72 text-[clamp(64px,8vw,88px)]">Hair <span class="text-accent">Removal</span> Center</h1>
                <div class="pt-6 sm:mt-28 flex justify-between items-center flex-col sm:flex-row">
                    <div class="sm:max-w-44 sm:pt-10 sm:ml-20">
                        The only way to get rid of <strong>unwanted hairs forever</strong>
                    </div>
                    <figure class="w-full mt-4 sm:mt-0 sm:max-w-64 sm:mr-10 bg-white-20 rounded-3xl p-7 sm:p-10">
                        <h3 class="text-2xl mb-2 sm:mb-0 sm:text-3xl tracking-[-0.05em]">Over <span>140 years</span></h3>
                        <p class="sm:w-3/4">of proven safety and effectiveness</p>
                    </figure>
                </div>
            </div>

            <!-- girl-->
            <figure class="sm:absolute z-10 sm:right-[10vw] sm:top-0 sm:bottom-0 sm:h-auto sm:w-auto">
                <img class="pointer-events-none select-none w-full h-full object-cover object-top" src="/wp-content/uploads/2025/04/woman-cover.png" alt="">
            </figure>


            <!--left-->
            <figure data-parallax="-150" class="hidden sm:block absolute top-1/2 sm:top-[10%] sm:bottom-0 right-0 sm:left-0">
                <img class="pointer-events-none select-none w-full h-full object-cover object-bottom" src="/wp-content/uploads/2025/04/flower.svg" alt="">
            </figure>
            <!-- right-->
            <figure data-parallax="-120" class="absolute top-[10%] sm:top-0 -right-[10%] sm:right-0 w-1/2 sm:w-auto">
                <img class="pointer-events-none select-none w-full h-1/2 object-cover object-top" src="/wp-content/uploads/2025/04/flower2.svg" alt="">
            </figure>
            <figure data-parallax="150" class="absolute bottom-1/2 w-32 z-20 sm:z-auto sm:w-auto sm:bottom-[15%] right-0">
                <img class="pointer-events-none select-none w-full h-full object-cover object-top" src="/wp-content/uploads/2025/04/flower3.png" alt="">
            </figure>

        </section>

        <section class="relative mb-6 sm:mb-10">
            <div class="px-4 lg:px-[4.5vmax]">
                <div class="grid gap-8 xl:gap-12 grid-cols-1 xs:grid-cols-2 md:grid-cols-3 bg-white-20 rounded-3xl px-8 py-12 sm:px-10 sm:py-16 xl:px-24 xl:py-20">
                    <div class="mask-circle *:z-10 px-4">
                        <h3 class="text-2xl sm:text-3xl relative leading-none mb-6">Smooth <br>& Effortless</h3>
                        <p>Say goodbye to shaving and waxing. <strong>Electrolysis provides permanent hair removal</strong> with minimal effort</p>
                    </div>
                    <div class="mask-circle *:z-10 px-4">
                        <h3 class="text-2xl sm:text-3xl relative leading-none mb-6">Advanced <br>& Technology</h3>
                        <p>Our state-of-the-art equipment targets hair follicles with precision, ensuring maximum effectiveness and long-lasting results while keeping your skin healthy</p>
                    </div>
                    <div class="mask-circle *:z-10 px-4">
                        <h3 class="text-2xl sm:text-3xl relative leading-none mb-6">Personalized <br>& Carie</h3>
                        <p>Each treatment is customized to suit your unique skin type and hair structure, ensuring safe and optimal results</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-6 sm:py-10 relative bg-lines sm:bg-cover bg-top bg-no-repeat">
            <div class="flex flex-col sm:flex-row justify-between gap-4 px-4 lg:px-[4.5vmax]">
                <div class="w-full sm:w-1/2 md:max-w-[340px]">
                    <div class="relative" data-parallax="100">
                        <h2><span>Experience the Future</span> of Permanent Hair Removal</h2>
                        <img class="absolute -bottom-5 -z-[1] left-0 w-28 object-cover" src="/wp-content/uploads/2025/04/flower-2-1.png" alt="">
                    </div>
                    <div class="mt-32 xl:mt-60 *:mb-10 *:last-child:mb-0">
                        <p>Electrolysis is the only FDA-approved method for permanent hair removal, ensuring smooth, hair-free skin for life.</p>
                        <p>Say goodbye to shaving, waxing, and unwanted hair — forever!</p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-[30%] 2xl:w-[30%]">
                    <div class="sm:mt-5 md:mt-32 mb-6 sm:mb-16 grid grid-cols-2 gap-4 2xl:gap-6">
                        <div class="bg-white-20 rounded-2xl sm:rounded-3xl px-6 py-7 sm:px-3 sm:py-4 2xl:px-6 2xl:py-8">
                            <h3 class="text-accent text-3xl relative leading-none mb-5 2xl:mb-10">01</h3>
                            <p>100% Permanent Results</p>
                        </div>
                        <div class="bg-white-20 rounded-2xl sm:rounded-3xl px-6 py-7 sm:px-3 sm:py-4 2xl:px-6 2xl:py-8">
                            <h3 class="text-accent text-3xl relative leading-none mb-5 2xl:mb-10">01</h3>
                            <p>Performed by Certified Experts</p>
                        </div>
                        <div class="bg-white-20 rounded-2xl sm:rounded-3xl px-6 py-7 sm:px-3 sm:py-4 2xl:px-6 2xl:py-8">
                            <h3 class="text-accent text-3xl relative leading-none mb-5 2xl:mb-10">01</h3>
                            <p>100% Permanent Results</p>
                        </div>
                        <div class="bg-white-20 rounded-2xl sm:rounded-3xl px-6 py-7 sm:px-3 sm:py-4 2xl:px-6 2xl:py-8">
                            <h3 class="text-accent text-3xl relative leading-none mb-5 2xl:mb-10">01</h3>
                            <p>100% Permanent Results</p>
                        </div>
                    </div>
                    <div class="sm:mb-16 grid grid-cols-2 xs:grid-cols-2 gap-6">
                        <p><strong>Located in Dubai</strong> — Book Your Consultation Today!</p>
                        <a class="btn --icon" href="#" target="_self">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.33337 14.6667L2.29078 11.1128C1.51866 9.72842 1.27334 8.11294 1.59986 6.56283C1.92638 5.01271 2.80282 3.63194 4.06837 2.67388C5.33391 1.71582 6.90366 1.24475 8.48957 1.3471C10.0755 1.44945 11.5712 2.11835 12.7022 3.23108C13.8332 4.3438 14.5236 5.82569 14.6468 7.40483C14.77 8.98397 14.3177 10.5544 13.3729 11.828C12.4281 13.1016 11.0541 13.9929 9.50316 14.3384C7.95219 14.6838 6.32824 14.4603 4.92931 13.7087L1.33337 14.6667ZM5.1027 12.3788L5.32509 12.5103C6.33836 13.1089 7.52185 13.3566 8.69112 13.2148C9.86039 13.0731 10.9498 12.5498 11.7895 11.7265C12.6292 10.9032 13.1721 9.82627 13.3335 8.6634C13.495 7.50053 13.2659 6.3171 12.6821 5.29752C12.0982 4.27793 11.1924 3.47948 10.1057 3.02658C9.01894 2.57368 7.81244 2.49178 6.67415 2.79363C5.53586 3.09549 4.52973 3.76415 3.81255 4.69541C3.09537 5.62667 2.70743 6.76822 2.70918 7.94217C2.70823 8.91556 2.97833 9.87012 3.48943 10.6996L3.62889 10.9287L3.09365 12.9123L5.1027 12.3788Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4929 8.8547C10.3626 8.7499 10.2101 8.67614 10.0469 8.63903C9.88375 8.60192 9.71424 8.60245 9.55131 8.64057C9.3065 8.742 9.14831 9.12518 8.99013 9.31678C8.95677 9.36271 8.90776 9.39492 8.85228 9.40737C8.79681 9.41982 8.73869 9.41165 8.68883 9.3844C7.79257 9.03426 7.04133 8.39216 6.55711 7.5624C6.51581 7.51062 6.49626 7.44487 6.50258 7.37901C6.50891 7.31314 6.5406 7.25229 6.59101 7.20927C6.76743 7.03505 6.89697 6.81928 6.96763 6.5819C6.98333 6.32006 6.92318 6.05924 6.79438 5.83056C6.69481 5.50994 6.50531 5.22446 6.24827 5.00784C6.1157 4.94836 5.96871 4.92842 5.82502 4.95042C5.68134 4.97242 5.54711 5.03541 5.43852 5.13181C5.25001 5.29404 5.10038 5.49638 5.00065 5.72394C4.90092 5.95149 4.85364 6.19846 4.86228 6.44666C4.86286 6.58603 4.88057 6.72481 4.91501 6.85989C5.00246 7.18444 5.13696 7.4945 5.31423 7.78028C5.44214 7.9992 5.58169 8.21113 5.73229 8.41517C6.22174 9.08536 6.83698 9.65438 7.54387 10.0907C7.8986 10.3124 8.27772 10.4926 8.67376 10.6279C9.08516 10.8139 9.53938 10.8853 9.98819 10.8345C10.2439 10.7959 10.4862 10.6952 10.6937 10.5412C10.9013 10.3873 11.0677 10.1848 11.1783 9.95166C11.2434 9.81081 11.2631 9.65334 11.2348 9.50085C11.167 9.18905 10.749 9.00497 10.4929 8.8547Z" fill="white"></path>
                            </svg>
                            Book now
                        </a>
                    </div>
                </div>
                <figure class="block sm:hidden md:block relative sm:absolute sm:-top-[15%] sm:right-0 sm:left-0 sm:bottom-0 w-full sm:w-[clamp(500px,55vw,625px)] 2xl:w-[clamp(500px,50vw,625px)] m-auto">
                    <img class="w-full h-full object-cover object-top" src="/wp-content/uploads/2025/04/woman-2.png" alt="">
                </figure>
            </div>
        </section>

        <section class="bg-white-20 py-10 lg:pt-16 xl:pt-20 rounded-t-[32px] md:rounded-t-[40px] lg:rounded-t-[60px] xl:rounded-t-[80px] relative">
            <div class="px-4 lg:px-[4.5vmax]">
                <div class="relative max-w-4xl m-auto">
                    <h2 class="mb-6 text-center"><span>Pricing</span> for electrolysis <br>permanent hair removal procedure</h2>
                    <img class="hidden sm:block absolute -top-2 md:top-2 z-[1] right-16 md:right-14 w-28 h-14 object-cover rounded-3xl" src="/wp-content/uploads/2025/04/pic.jpg" alt="">
                </div>
                <div class="w-9/12 m-auto flex justify-between gap-4 opacity-50">
                    <span>Any body part and hair color</span>
                    <span>For ladies only</span>
                </div>
                <div class="mx-auto sm:px-4 2xl:px-12 xl:px-0">
                    <div class="text-center">
                        <div role="tablist" aria-label="tabs" class="relative mx-auto mt-12 grid h-12 w-auto grid-cols-2 items-center gap-x-1 overflow-hidden rounded-full border border-white-60 px-[3px]  sm:w-max">
                            <div class="tab-indicator absolute h-10 rounded-full bg-accent text-white-10 shadow-md transition-all duration-500 dark:bg-gray-800"></div>

                            <button role="tab" aria-selected="true" aria-controls="panel-0" class="tab relative block rounded-full py-3.5 px-6 hover:text-primary aria-selected:text-white-10">
                                <span class="m-auto block w-max text-sm tracking-wider">by time</span>
                            </button>

                            <button role="tab" aria-selected="false" aria-controls="panel-1" class="tab relative block rounded-full py-3.5 px-6 hover:text-primary aria-selected:text-white-10">
                                <span class="m-auto block w-max text-sm tracking-wider">by zone</span>
                            </button>
                        </div>
                    </div>

                    <div class="mt-6 relative transition-[height] duration-500">
                        <div class="relative w-full transition-[height] duration-500" id="panel-container">
                            <div class="panel absolute inset-0 transition-all duration-500 ease-in-out opacity-100 scale-100 visible z-20" id="panel-0">
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <div class="bg-white-50 rounded-3xl p-10 sm:px-6 sm:py-8">
                                        <h3 class="mb-8 sm:mb-16 text-3xl relative leading-none mb-10">15 min</h3>
                                        <p>Great for small areas like upper lip, chin, or brows. Fast, effective, and painless!</p>
                                        <div class="mt-16 sm:mt-20 2xl:mt-28 flex justify-between items-center gap-4">
                                            <span class="font-normal">150 AED</span>
                                            <a class="btn --icon --white" href="#" target="_self">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33337 14.6667L2.29078 11.1128C1.51866 9.72842 1.27334 8.11294 1.59986 6.56283C1.92638 5.01271 2.80282 3.63194 4.06837 2.67388C5.33391 1.71582 6.90366 1.24475 8.48957 1.3471C10.0755 1.44945 11.5712 2.11835 12.7022 3.23108C13.8332 4.3438 14.5236 5.82569 14.6468 7.40483C14.77 8.98397 14.3177 10.5544 13.3729 11.828C12.4281 13.1016 11.0541 13.9929 9.50316 14.3384C7.95219 14.6838 6.32824 14.4603 4.92931 13.7087L1.33337 14.6667ZM5.1027 12.3788L5.32509 12.5103C6.33836 13.1089 7.52185 13.3566 8.69112 13.2148C9.86039 13.0731 10.9498 12.5498 11.7895 11.7265C12.6292 10.9032 13.1721 9.82627 13.3335 8.6634C13.495 7.50053 13.2659 6.3171 12.6821 5.29752C12.0982 4.27793 11.1924 3.47948 10.1057 3.02658C9.01894 2.57368 7.81244 2.49178 6.67415 2.79363C5.53586 3.09549 4.52973 3.76415 3.81255 4.69541C3.09537 5.62667 2.70743 6.76822 2.70918 7.94217C2.70823 8.91556 2.97833 9.87012 3.48943 10.6996L3.62889 10.9287L3.09365 12.9123L5.1027 12.3788Z" fill="white"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4929 8.8547C10.3626 8.7499 10.2101 8.67614 10.0469 8.63903C9.88375 8.60192 9.71424 8.60245 9.55131 8.64057C9.3065 8.742 9.14831 9.12518 8.99013 9.31678C8.95677 9.36271 8.90776 9.39492 8.85228 9.40737C8.79681 9.41982 8.73869 9.41165 8.68883 9.3844C7.79257 9.03426 7.04133 8.39216 6.55711 7.5624C6.51581 7.51062 6.49626 7.44487 6.50258 7.37901C6.50891 7.31314 6.5406 7.25229 6.59101 7.20927C6.76743 7.03505 6.89697 6.81928 6.96763 6.5819C6.98333 6.32006 6.92318 6.05924 6.79438 5.83056C6.69481 5.50994 6.50531 5.22446 6.24827 5.00784C6.1157 4.94836 5.96871 4.92842 5.82502 4.95042C5.68134 4.97242 5.54711 5.03541 5.43852 5.13181C5.25001 5.29404 5.10038 5.49638 5.00065 5.72394C4.90092 5.95149 4.85364 6.19846 4.86228 6.44666C4.86286 6.58603 4.88057 6.72481 4.91501 6.85989C5.00246 7.18444 5.13696 7.4945 5.31423 7.78028C5.44214 7.9992 5.58169 8.21113 5.73229 8.41517C6.22174 9.08536 6.83698 9.65438 7.54387 10.0907C7.8986 10.3124 8.27772 10.4926 8.67376 10.6279C9.08516 10.8139 9.53938 10.8853 9.98819 10.8345C10.2439 10.7959 10.4862 10.6952 10.6937 10.5412C10.9013 10.3873 11.0677 10.1848 11.1783 9.95166C11.2434 9.81081 11.2631 9.65334 11.2348 9.50085C11.167 9.18905 10.749 9.00497 10.4929 8.8547Z" fill="white"></path>
                                                </svg>
                                                Book now
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bg-white-50 rounded-3xl p-10 sm:px-6 sm:py-8">
                                        <h3 class="mb-8 sm:mb-16 text-3xl relative leading-none mb-10">15 min</h3>
                                        <p>Great for small areas like upper lip, chin, or brows. Fast, effective, and painless!</p>
                                        <div class="mt-16 sm:mt-20 2xl:mt-28 flex justify-between items-center gap-4">
                                            <span class="font-normal">150 AED</span>
                                            <a class="btn --icon --white" href="#" target="_self">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33337 14.6667L2.29078 11.1128C1.51866 9.72842 1.27334 8.11294 1.59986 6.56283C1.92638 5.01271 2.80282 3.63194 4.06837 2.67388C5.33391 1.71582 6.90366 1.24475 8.48957 1.3471C10.0755 1.44945 11.5712 2.11835 12.7022 3.23108C13.8332 4.3438 14.5236 5.82569 14.6468 7.40483C14.77 8.98397 14.3177 10.5544 13.3729 11.828C12.4281 13.1016 11.0541 13.9929 9.50316 14.3384C7.95219 14.6838 6.32824 14.4603 4.92931 13.7087L1.33337 14.6667ZM5.1027 12.3788L5.32509 12.5103C6.33836 13.1089 7.52185 13.3566 8.69112 13.2148C9.86039 13.0731 10.9498 12.5498 11.7895 11.7265C12.6292 10.9032 13.1721 9.82627 13.3335 8.6634C13.495 7.50053 13.2659 6.3171 12.6821 5.29752C12.0982 4.27793 11.1924 3.47948 10.1057 3.02658C9.01894 2.57368 7.81244 2.49178 6.67415 2.79363C5.53586 3.09549 4.52973 3.76415 3.81255 4.69541C3.09537 5.62667 2.70743 6.76822 2.70918 7.94217C2.70823 8.91556 2.97833 9.87012 3.48943 10.6996L3.62889 10.9287L3.09365 12.9123L5.1027 12.3788Z" fill="white"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4929 8.8547C10.3626 8.7499 10.2101 8.67614 10.0469 8.63903C9.88375 8.60192 9.71424 8.60245 9.55131 8.64057C9.3065 8.742 9.14831 9.12518 8.99013 9.31678C8.95677 9.36271 8.90776 9.39492 8.85228 9.40737C8.79681 9.41982 8.73869 9.41165 8.68883 9.3844C7.79257 9.03426 7.04133 8.39216 6.55711 7.5624C6.51581 7.51062 6.49626 7.44487 6.50258 7.37901C6.50891 7.31314 6.5406 7.25229 6.59101 7.20927C6.76743 7.03505 6.89697 6.81928 6.96763 6.5819C6.98333 6.32006 6.92318 6.05924 6.79438 5.83056C6.69481 5.50994 6.50531 5.22446 6.24827 5.00784C6.1157 4.94836 5.96871 4.92842 5.82502 4.95042C5.68134 4.97242 5.54711 5.03541 5.43852 5.13181C5.25001 5.29404 5.10038 5.49638 5.00065 5.72394C4.90092 5.95149 4.85364 6.19846 4.86228 6.44666C4.86286 6.58603 4.88057 6.72481 4.91501 6.85989C5.00246 7.18444 5.13696 7.4945 5.31423 7.78028C5.44214 7.9992 5.58169 8.21113 5.73229 8.41517C6.22174 9.08536 6.83698 9.65438 7.54387 10.0907C7.8986 10.3124 8.27772 10.4926 8.67376 10.6279C9.08516 10.8139 9.53938 10.8853 9.98819 10.8345C10.2439 10.7959 10.4862 10.6952 10.6937 10.5412C10.9013 10.3873 11.0677 10.1848 11.1783 9.95166C11.2434 9.81081 11.2631 9.65334 11.2348 9.50085C11.167 9.18905 10.749 9.00497 10.4929 8.8547Z" fill="white"></path>
                                                </svg>
                                                Book now
                                            </a>
                                        </div>
                                    </div>
                                    <div class="bg-white-50 rounded-3xl p-10 sm:px-6 sm:py-8">
                                        <h3 class="mb-8 sm:mb-16 text-3xl relative leading-none mb-10">15 min</h3>
                                        <p>Great for small areas like upper lip, chin, or brows. Fast, effective, and painless!</p>
                                        <div class="mt-16 sm:mt-20 2xl:mt-28 flex justify-between items-center gap-4">
                                            <span class="font-normal">150 AED</span>
                                            <a class="btn --icon --white" href="#" target="_self">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33337 14.6667L2.29078 11.1128C1.51866 9.72842 1.27334 8.11294 1.59986 6.56283C1.92638 5.01271 2.80282 3.63194 4.06837 2.67388C5.33391 1.71582 6.90366 1.24475 8.48957 1.3471C10.0755 1.44945 11.5712 2.11835 12.7022 3.23108C13.8332 4.3438 14.5236 5.82569 14.6468 7.40483C14.77 8.98397 14.3177 10.5544 13.3729 11.828C12.4281 13.1016 11.0541 13.9929 9.50316 14.3384C7.95219 14.6838 6.32824 14.4603 4.92931 13.7087L1.33337 14.6667ZM5.1027 12.3788L5.32509 12.5103C6.33836 13.1089 7.52185 13.3566 8.69112 13.2148C9.86039 13.0731 10.9498 12.5498 11.7895 11.7265C12.6292 10.9032 13.1721 9.82627 13.3335 8.6634C13.495 7.50053 13.2659 6.3171 12.6821 5.29752C12.0982 4.27793 11.1924 3.47948 10.1057 3.02658C9.01894 2.57368 7.81244 2.49178 6.67415 2.79363C5.53586 3.09549 4.52973 3.76415 3.81255 4.69541C3.09537 5.62667 2.70743 6.76822 2.70918 7.94217C2.70823 8.91556 2.97833 9.87012 3.48943 10.6996L3.62889 10.9287L3.09365 12.9123L5.1027 12.3788Z" fill="white"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4929 8.8547C10.3626 8.7499 10.2101 8.67614 10.0469 8.63903C9.88375 8.60192 9.71424 8.60245 9.55131 8.64057C9.3065 8.742 9.14831 9.12518 8.99013 9.31678C8.95677 9.36271 8.90776 9.39492 8.85228 9.40737C8.79681 9.41982 8.73869 9.41165 8.68883 9.3844C7.79257 9.03426 7.04133 8.39216 6.55711 7.5624C6.51581 7.51062 6.49626 7.44487 6.50258 7.37901C6.50891 7.31314 6.5406 7.25229 6.59101 7.20927C6.76743 7.03505 6.89697 6.81928 6.96763 6.5819C6.98333 6.32006 6.92318 6.05924 6.79438 5.83056C6.69481 5.50994 6.50531 5.22446 6.24827 5.00784C6.1157 4.94836 5.96871 4.92842 5.82502 4.95042C5.68134 4.97242 5.54711 5.03541 5.43852 5.13181C5.25001 5.29404 5.10038 5.49638 5.00065 5.72394C4.90092 5.95149 4.85364 6.19846 4.86228 6.44666C4.86286 6.58603 4.88057 6.72481 4.91501 6.85989C5.00246 7.18444 5.13696 7.4945 5.31423 7.78028C5.44214 7.9992 5.58169 8.21113 5.73229 8.41517C6.22174 9.08536 6.83698 9.65438 7.54387 10.0907C7.8986 10.3124 8.27772 10.4926 8.67376 10.6279C9.08516 10.8139 9.53938 10.8853 9.98819 10.8345C10.2439 10.7959 10.4862 10.6952 10.6937 10.5412C10.9013 10.3873 11.0677 10.1848 11.1783 9.95166C11.2434 9.81081 11.2631 9.65334 11.2348 9.50085C11.167 9.18905 10.749 9.00497 10.4929 8.8547Z" fill="white"></path>
                                                </svg>
                                                Book now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel absolute inset-0 transition-all duration-500 ease-in-out opacity-0 scale-95 pointer-events-none invisible z-10" id="panel-1">
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <div class="bg-white-50 rounded-3xl p-10 sm:px-6 sm:py-8">
                                        <h3 class="mb-4 sm:mb-16 text-3xl relative leading-none mb-10">Hands</h3>
                                        <p>According to the previous one, targeted traffic accelerates product placement.</p>
                                        <div class="mt-6 flex justify-between items-center gap-4">
                                            <a class="btn --icon --white" href="#" target="_self">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33337 14.6667L2.29078 11.1128C1.51866 9.72842 1.27334 8.11294 1.59986 6.56283C1.92638 5.01271 2.80282 3.63194 4.06837 2.67388C5.33391 1.71582 6.90366 1.24475 8.48957 1.3471C10.0755 1.44945 11.5712 2.11835 12.7022 3.23108C13.8332 4.3438 14.5236 5.82569 14.6468 7.40483C14.77 8.98397 14.3177 10.5544 13.3729 11.828C12.4281 13.1016 11.0541 13.9929 9.50316 14.3384C7.95219 14.6838 6.32824 14.4603 4.92931 13.7087L1.33337 14.6667ZM5.1027 12.3788L5.32509 12.5103C6.33836 13.1089 7.52185 13.3566 8.69112 13.2148C9.86039 13.0731 10.9498 12.5498 11.7895 11.7265C12.6292 10.9032 13.1721 9.82627 13.3335 8.6634C13.495 7.50053 13.2659 6.3171 12.6821 5.29752C12.0982 4.27793 11.1924 3.47948 10.1057 3.02658C9.01894 2.57368 7.81244 2.49178 6.67415 2.79363C5.53586 3.09549 4.52973 3.76415 3.81255 4.69541C3.09537 5.62667 2.70743 6.76822 2.70918 7.94217C2.70823 8.91556 2.97833 9.87012 3.48943 10.6996L3.62889 10.9287L3.09365 12.9123L5.1027 12.3788Z" fill="white"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4929 8.8547C10.3626 8.7499 10.2101 8.67614 10.0469 8.63903C9.88375 8.60192 9.71424 8.60245 9.55131 8.64057C9.3065 8.742 9.14831 9.12518 8.99013 9.31678C8.95677 9.36271 8.90776 9.39492 8.85228 9.40737C8.79681 9.41982 8.73869 9.41165 8.68883 9.3844C7.79257 9.03426 7.04133 8.39216 6.55711 7.5624C6.51581 7.51062 6.49626 7.44487 6.50258 7.37901C6.50891 7.31314 6.5406 7.25229 6.59101 7.20927C6.76743 7.03505 6.89697 6.81928 6.96763 6.5819C6.98333 6.32006 6.92318 6.05924 6.79438 5.83056C6.69481 5.50994 6.50531 5.22446 6.24827 5.00784C6.1157 4.94836 5.96871 4.92842 5.82502 4.95042C5.68134 4.97242 5.54711 5.03541 5.43852 5.13181C5.25001 5.29404 5.10038 5.49638 5.00065 5.72394C4.90092 5.95149 4.85364 6.19846 4.86228 6.44666C4.86286 6.58603 4.88057 6.72481 4.91501 6.85989C5.00246 7.18444 5.13696 7.4945 5.31423 7.78028C5.44214 7.9992 5.58169 8.21113 5.73229 8.41517C6.22174 9.08536 6.83698 9.65438 7.54387 10.0907C7.8986 10.3124 8.27772 10.4926 8.67376 10.6279C9.08516 10.8139 9.53938 10.8853 9.98819 10.8345C10.2439 10.7959 10.4862 10.6952 10.6937 10.5412C10.9013 10.3873 11.0677 10.1848 11.1783 9.95166C11.2434 9.81081 11.2631 9.65334 11.2348 9.50085C11.167 9.18905 10.749 9.00497 10.4929 8.8547Z" fill="white"></path>
                                                </svg>
                                                Book now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white-20 pt-4 md:pt-10 lg:pt-16 xl:pt-20 relative">
            <div class="bg-white-50 rounded-t-[32px] md:rounded-t-[40px] lg:rounded-t-[60px] xl:rounded-t-[80px]">
                <div class="px-4 lg:px-[4.5vmax] z-[1] relative">
                    <div class="flex flex-col-reverse sm:flex-row sm:justify-end gap-4">
                        <div class="w-full sm:w-3/6 left-0 sm:absolute sm:bottom-0">
                            <figure class="h-full relative pl-[7vw]">
                                <img class="w-full h-full object-cover object-top" src="/wp-content/uploads/2025/04/woman-3.png" alt="">
                            </figure>
                        </div>
                        <div class="w-full sm:w-3/6 xl:pl-[10vmax] pt-16 xl:pt-32 pb-4 md:pb-10 lg:pb-16 xl:pb-20 z-10 relative">
                            <div class="relative max-w-lg">
                                <h2>Electrolysis <br><span>Packages & Offers</span></h2>
                                <img class="absolute z-[1] -top-2 sm:top-0 sm:bottom-0 right-0 sm:right-10 w-20 h-12 sm:w-28 sm:h-14 object-cover rounded-3xl" src="/wp-content/uploads/2025/04/pic.jpg" alt="">
                            </div>

                            <div class="mt-6">Renew Yourself with Smooth, Hair-Free Skin</div>
                            <div class="mt-8">
                                <div class="flex justify-between gap-4 border-b py-6">
                                    <div>
                                        <h4>Get <span>1 hour</span> free</h4>
                                        <span>For buy 6 hours</span>
                                    </div>
                                    <div>
                                        <span class="text-2xl sm:text-3xl font-qanelas uppercase tracking-[-0.05em]">2700 AED</span>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-4 border-b py-6">
                                    <div>
                                        <h4>Get <span>3 hour</span> free</h4>
                                        <span>For buy 10 hours</span>
                                    </div>
                                    <div>
                                        <span class="text-2xl sm:text-3xl font-qanelas uppercase tracking-[-0.05em]">4500 AED</span>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-4 border-b py-6">
                                    <div>
                                        <h4>Get <span>5 hour</span> free</h4>
                                        <span>For buy 15 hours</span>
                                    </div>
                                    <div>
                                        <span class="text-2xl sm:text-3xl font-qanelas uppercase tracking-[-0.05em]">6750 AED</span>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-4 border-b py-6">
                                    <div>
                                        <h4>Get <span>8 hour</span> free</h4>
                                        <span>For buy 20 hours</span>
                                    </div>
                                    <div>
                                        <span class="text-2xl sm:text-3xl font-qanelas uppercase tracking-[-0.05em]">9000 AED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <figure data-parallax="-150" class="absolute top-[68%] sm:top-[55%] w-full sm:w-[53%] bottom-0 left-0">
                <img class="pointer-events-none select-none w-full h-full object-cover object-bottom" src="/wp-content/uploads/2025/04/flower4-1.png" alt="">
            </figure>
        </section>

        <section id="aftercare-scroll" class="relative mb-10 px-4 lg:px-[4.5vmax]">
            <!-- Залипающий контент -->
            <div class="sm:overflow-hidden sm:sticky sm:top-20 bg-white-20 xl:min-h-dvh rounded-[32px] md:rounded-[40px] lg:rounded-[60px] xl:rounded-[80px] bg-lines-white sm:bg-cover bg-top bg-no-repeat">
                <div class="flex flex-col sm:flex-row gap-8 sm:gap-16 xl:gap-32 py-10 sm:py-16 2xl:py-20 px-6 sm:px-16 2xl:px-24">
                    <div class="w-full sm:w-1/2 xl:pr-28">
                        <h2>Aftercare for <br><span>Long-Lasting Results</span></h2>
                        <div class="mt-6 sm:mt-32">
                            Following electrolysis, proper care is essential for faster healing and optimal results. Here’s how to keep your skin smooth and irritation-free
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 relative">
                        <div id="aftercare-cards" class="relative w-full h-full">
                            <!-- Карточка 1 -->
                            <div class="mb-10 sm:mb-0 aftercare-card absolute inset-0 opacity-0 transition-opacity duration-500">
                                <h3 class="mb-4"><span>01.</span> Keep Skin Hydrated</h3>
                                <p>Apply a soothing aloe vera gel or a fragrance-free moisturizer to reduce redness and dryness</p>
                                <figure class="mt-6 w-full h-48 md:h-64 xl:h-80 rounded-3xl overflow-hidden">
                                    <img class="w-full h-full object-cover object-top" src="/wp-content/uploads/2025/04/pic.jpg" alt="">
                                </figure>
                            </div>

                            <!-- Карточка 2 -->
                            <div class="mb-10 sm:mb-0 aftercare-card absolute inset-0 opacity-0 transition-opacity duration-500">
                                <h3 class="mb-4"><span>02.</span> Avoid Sun Exposure</h3>
                                <p>Protect treated areas with sunscreen (SPF 30+) and avoid direct sunlight for at least 48 hours</p>
                                <figure class="mt-6 w-full h-80 rounded-3xl overflow-hidden">
                                    <img class="w-full h-full object-cover object-top" src="/wp-content/uploads/2025/04/pic.jpg" alt="">
                                </figure>
                            </div>

                            <!-- Карточка 3 -->
                            <div class="aftercare-card absolute inset-0 opacity-0 transition-opacity duration-500">
                                <h3 class="mb-4"><span>03.</span> Gently Exfoliate</h3>
                                <p>After a few days, use a gentle exfoliator to help remove dead skin and prevent ingrown hairs</p>
                                <figure class="mt-6 w-full h-80 rounded-3xl overflow-hidden">
                                    <img class="w-full h-full object-cover object-top" src="/wp-content/uploads/2025/04/pic.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-7 sm:my-10">
             <div class="px-4 lg:px-[4.5vmax] mb-10">
                 <div class="flex flex-row justify-between items-center">
                     <h2>Useful articles</h2>
                     <a class="!hidden sm:!inline-flex btn" href="#" target="_self">
                         read all articles
                     </a>
                 </div>
                 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-8 mt-7 sm:mt-10">
                     <?php
                     $latest_posts = new WP_Query([
                         'post_type' => 'post',
                         'posts_per_page' => 3,
                     ]);

                     if ($latest_posts->have_posts()) :
                         while ($latest_posts->have_posts()) : $latest_posts->the_post();

                             $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                             ?>
                             <article class="bg-white-20  p-4 rounded-3xl  transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group">
                                 <div class="w-full h-32 sm:h-52 xl:h-64 rounded-2xl overflow-hidden bg-white-70">
                                     <?php if ($thumbnail_url) : ?>
                                         <img src="<?= esc_url($thumbnail_url); ?>" alt="<?= esc_attr(get_the_title()); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                     <?php endif; ?>
                                 </div>
                                 <div class="mt-4">
                                     <h3 class="text-xs sm:text-2xl font-medium font-qanelas mb-2"><?php the_title(); ?></h3>
                                     <p class="text-xs sm:text-sm"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                     <a href="<?php the_permalink(); ?>" class="text-xs sm:text-sm text-accent mt-2 sm:mt-4 inline-block uppercase font-normal">READ MORE</a>
                                 </div>
                             </article>
                         <?php
                         endwhile;
                         wp_reset_postdata();
                     endif;
                     ?>
                 </div>
                 <div class="sm:hidden w-full mt-7">
                     <a class="w-full block  btn" href="#" target="_self">
                         read all articles
                     </a>
                 </div>
             </div>

         </section>

        <section class="my-7 sm:my-10 pb-10 xl:pb-24 bg-lines sm:bg-cover bg-top bg-no-repeat relative">
            <div class="px-4 lg:px-[4.5vmax] mb-10">
                <div class="sm:pt-20 xl:pt-28 relative flex flex-col sm:flex-row justify-between">
                    <div class="w-full sm:max-w-80 pr-3 z-[1]">
                        <div class="relative">
                            <h2 class="w-3/4 sm:w-auto">Electrolysis hair removal <span>course</span></h2>
                            <img class="absolute z-[1] top-2 sm:bottom-0 right-0 w-20 h-12 sm:w-28 h-14 object-cover rounded-3xl" src="/wp-content/uploads/2025/04/pic.jpg" alt="">
                        </div>

                        <div class="pt-8 *:mb-8">
                            <p><strong>The trademark stabilizes the media mix. Brand recognition generates a role-playing media channel.</strong></p>
                            <p>The exhibition, within the framework of today's views, allows for a creative product, relying on insider information. Brand recognition significantly stabilizes the interpersonal survey.</p>
                        </div>
                    </div>
                    <figure class="relative sm:absolute  top-0 sm:left-[4vw] right-0  m-auto w-[90vw] sm:w-[clamp(30vw,45vw,700px)] 2xl:w-[clamp(500px,50vw,700px)] aspect-square rounded-full overflow-hidden">
                        <img class="w-full h-full object-cover object-top" src="/wp-content/uploads/2025/04/pic.jpg" alt="">
                    </figure>
                    <div class="w-full sm:max-w-80 z-[1]">
                        <div class="-mt-5 sm:mt-0 sm:pt-10 grid grid-cols-2 gap-4">
                            <figure class="bg-white-20 rounded-3xl px-6 py-2.5 sm:px-8 sm:py-5">
                                <p>Location</p>
                                <h3 class="text-2xl sm:text-3xl">Dubai</h3>
                            </figure>
                            <figure class="bg-white-20 rounded-3xl px-6 py-2.5 sm:px-8 sm:py-5">
                                <p>Training time</p>
                                <h3 class="text-2xl sm:text-3xl">4 days</h3>
                            </figure>
                        </div>
                        <div class="mt-6 sm:mt-56 max-w-xl text-center sm:text-right">
                            <a class="btn --icon" href="#" target="_self">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.33337 14.6667L2.29078 11.1128C1.51866 9.72842 1.27334 8.11294 1.59986 6.56283C1.92638 5.01271 2.80282 3.63194 4.06837 2.67388C5.33391 1.71582 6.90366 1.24475 8.48957 1.3471C10.0755 1.44945 11.5712 2.11835 12.7022 3.23108C13.8332 4.3438 14.5236 5.82569 14.6468 7.40483C14.77 8.98397 14.3177 10.5544 13.3729 11.828C12.4281 13.1016 11.0541 13.9929 9.50316 14.3384C7.95219 14.6838 6.32824 14.4603 4.92931 13.7087L1.33337 14.6667ZM5.1027 12.3788L5.32509 12.5103C6.33836 13.1089 7.52185 13.3566 8.69112 13.2148C9.86039 13.0731 10.9498 12.5498 11.7895 11.7265C12.6292 10.9032 13.1721 9.82627 13.3335 8.6634C13.495 7.50053 13.2659 6.3171 12.6821 5.29752C12.0982 4.27793 11.1924 3.47948 10.1057 3.02658C9.01894 2.57368 7.81244 2.49178 6.67415 2.79363C5.53586 3.09549 4.52973 3.76415 3.81255 4.69541C3.09537 5.62667 2.70743 6.76822 2.70918 7.94217C2.70823 8.91556 2.97833 9.87012 3.48943 10.6996L3.62889 10.9287L3.09365 12.9123L5.1027 12.3788Z" fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4929 8.8547C10.3626 8.7499 10.2101 8.67614 10.0469 8.63903C9.88375 8.60192 9.71424 8.60245 9.55131 8.64057C9.3065 8.742 9.14831 9.12518 8.99013 9.31678C8.95677 9.36271 8.90776 9.39492 8.85228 9.40737C8.79681 9.41982 8.73869 9.41165 8.68883 9.3844C7.79257 9.03426 7.04133 8.39216 6.55711 7.5624C6.51581 7.51062 6.49626 7.44487 6.50258 7.37901C6.50891 7.31314 6.5406 7.25229 6.59101 7.20927C6.76743 7.03505 6.89697 6.81928 6.96763 6.5819C6.98333 6.32006 6.92318 6.05924 6.79438 5.83056C6.69481 5.50994 6.50531 5.22446 6.24827 5.00784C6.1157 4.94836 5.96871 4.92842 5.82502 4.95042C5.68134 4.97242 5.54711 5.03541 5.43852 5.13181C5.25001 5.29404 5.10038 5.49638 5.00065 5.72394C4.90092 5.95149 4.85364 6.19846 4.86228 6.44666C4.86286 6.58603 4.88057 6.72481 4.91501 6.85989C5.00246 7.18444 5.13696 7.4945 5.31423 7.78028C5.44214 7.9992 5.58169 8.21113 5.73229 8.41517C6.22174 9.08536 6.83698 9.65438 7.54387 10.0907C7.8986 10.3124 8.27772 10.4926 8.67376 10.6279C9.08516 10.8139 9.53938 10.8853 9.98819 10.8345C10.2439 10.7959 10.4862 10.6952 10.6937 10.5412C10.9013 10.3873 11.0677 10.1848 11.1783 9.95166C11.2434 9.81081 11.2631 9.65334 11.2348 9.50085C11.167 9.18905 10.749 9.00497 10.4929 8.8547Z" fill="white"></path>
                                </svg>
                                Book now
                            </a>
                            <span class="block pt-2 sm:pr-10 opacity-50">from 99$</span>
                        </div>
                    </div>
                </div>
            </div>
            <figure data-parallax="-100" class="absolute w-full sm:w-[33%] sm:-bottom-[15%] sm:-bottom-[30%] left-0">
                <img class="pointer-events-none select-none w-full h-full object-cover object-bottom" src="/wp-content/uploads/2025/04/flower4-1.png" alt="">
            </figure>
        </section>


    </main>

<?php
get_footer();
