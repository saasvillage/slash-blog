<?php
$defaultMenu = [
    "/" => [
        "title" => "Home",
        "current" => false
    ],
    "/blog" => [
        "title" => "Blog",
        "current" => true
    ],
    "/#services" => [
        "title" => "Services",
        "current" => false
    ],
    "/contact" => [
        "title" => "Contact us",
        "current" => false
    ],
];
$menu = $defaultMenu;
?>
<nav class="<?= get_theme_mod('sb_theme_nav_classes') ?> fixed block z-50 w-full top-0">
    <div class="md:py-4 mx-auto max-w-7xl md:px-2  lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" type="button" class="ml-4 inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-shrink-0 items-center">
                    <!-- Logo start -->
                    <a href="/">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
                            echo '<img class="relative md:top-3 md:top-0 h-auto" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </a>
                    <!-- Logo end -->
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                    <?php

                    foreach ($menu as $link => $meta) {
                        echo '<a href="' . $link . '" class="' . ($meta['current'] ? 'bg-gray-900 text-white' : 'text-gray-300') . ' hover:bg-gray-900  px-3 py-2 rounded-md text-sm font-medium" aria-current="page">' . $meta['title'] . '</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="hidden mt-1 pt-1 md:block  items-center">
                <div class="<?= get_theme_mod('sb_theme_nav_cta_classes') ?>">
                    <a href="<?= get_theme_mod('sb_theme_nav_cta_button_link') ?>">
                        <button type="button" class="relative -top-3 md:top-0 w-32 py-3 w-32 py-3  items-center rounded-md border border-transparent bg-indigo-600 font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <?= get_theme_mod('sb_theme_nav_cta_button_text') ?>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <?php
            foreach ($menu as $link => $meta) {
                echo '<a href="' . $link . '" class="' . ($meta['current'] ? 'bg-gray-900 text-white' : 'text-gray-300') . ' hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">' . $meta['title'] . '</a>';
            }
            ?>
        </div>
    </div>
</nav>