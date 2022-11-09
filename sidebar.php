<div class="md:sticky md:top-28 px-6 py-2">

    <!-- search start -->
    <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
        <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Search</h2>
        <div class="mt-2 mb-2 flow-root">
            <ul role="list" class="-mb-8">
                <li>
                    <div class="relative pb-8">
                        <div class="relative flex space-x-3">
                            <div class=" min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                <form methood="get" action="/blog">

                                    <div>
                                        <div>
                                            <div class="relative flex items-center">
                                                <input type="hidden" name="post_type" value="post" />
                                                <input type="text" name="s" placeholder="Type search query" id="search" class="w-full block w-full ring-1 rounded-md border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </div>

                                    </div>
                                </form>

                                <div class="whitespace-nowrap text-right text-sm text-gray-500"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- search end -->

    <!-- Recent posts start -->
    <div class="mt-10  border-gray-200 bg-gray-100 px-2">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Latest posts</h3>
    </div>

    <?php
        $recent_posts = wp_get_recent_posts([
            "numberposts" => get_theme_mod( 'sb_theme_sidebar_recent_posts_count' )
        ]);

        foreach($recent_posts as $post){
    ?>
    <!-- Recent posts end -->

    <ul role="list" class="mt-4 divide-y divide-gray-200">
        <li class="relative bg-white py-5 px-4 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 hover:bg-gray-50">
            <div class="flex justify-between space-x-3">
                <div class="min-w-0 flex-1">
                    <a href="/blog/<?= $post['post_name'] ?> " class="block focus:outline-none">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        <p class="truncate text-sm font-medium text-gray-800"><?php print_r($post['post_title']) ?></p>
                        <p class="truncate text-sm text-gray-500"><?= $post['post_excerpt'] ?> </p>
                    </a>
                </div>
            </div>
        </li>

        <!-- More messages... -->
    </ul>

    <?php } ?>

</div>