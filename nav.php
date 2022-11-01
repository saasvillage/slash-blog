<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="grid grid-cols-1 md:grid-cols-4  items-center justify-center">
                <div class="items-center">
                    <!-- Logo start -->
                    <a href="/blog">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
                            echo '<img class="h-auto" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </a>
                    <!-- Logo end -->
                </div>
                <div class="items-center">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

</nav>