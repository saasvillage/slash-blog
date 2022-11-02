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
<nav class="bg-gray-800 fixed z-50 w-full top-0">
    <div class="py-4 mx-auto max-w-7xl md:px-2  lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="grid grid-cols-1 md:grid-cols-4  items-center justify-center">
                <div class="items-center">
                    <!-- Logo start -->
                    <a href="/">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
                            echo '<img class="mt-2 h-auto" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </a>
                    <!-- Logo end -->
                </div>
                <div class="items-center bg-gray-800 block w-screen">
                    <div class="flex space-x-4">
                        <?php

                            foreach($menu as $link => $meta){                                                                
                                echo '<a href="'.$link.'" class="'. ($meta['current'] ? 'bg-gray-900 text-white':'text-gray-300') .' hover:bg-gray-900  px-3 py-2 rounded-md text-sm font-medium" aria-current="page">'.$meta['title'].'</a>';                            
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <a href="/hire-us">
                    <button type="button"
                        class="w-36 py-4 px-6 items-center rounded-md border border-transparent bg-indigo-600 font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Hire us
                    </button>
                </a>
            </div>
        </div>
    </div>

</nav>