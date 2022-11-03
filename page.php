<div class="relative bg-gray-50 pb-12">
    <div class="absolute inset-0">
        <div class="h-1/3 bg-white rounded-lg sm:h-2/3"></div>
    </div>
    <div class="relative mx-auto max-w-7xl">
        <div class="text-center">
            <h2 class="pt-12  text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                <?= sb_theme_get_page_title() ?>
            </h2>
            <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
                <?= sb_theme_get_page_tagline() ?>
            </p>
        </div>
        <div class="mx-auto mt-12 grid max-w-lg px-4 gap-5 lg:max-w-none lg:grid-cols-3">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <a href="<?= the_permalink() ?>" class="hover:underline">
                                <img class="h-48 w-full object-cover" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="">
                            </a>
                        </div>
                        <div class="flex flex-1 flex-col justify-between bg-white p-6">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-indigo-600">
                                    <?php
                                    $catName = the_category();
                                    ?>
                                    <a href="<?= get_category_link(get_cat_ID($catName)) ?>" class="hover:underline">
                                        <?= $catName ?>
                                    </a>
                                </p>
                                <a href="<?= the_permalink() ?>" class="mt-2 block">
                                    <p class="text-xl font-semibold text-gray-900"><?= the_title() ?></p>
                                    <p class="mt-3 text-base text-gray-500">
                                        <?= the_excerpt() ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php
                if (get_next_posts_link()) {
                    next_posts_link();
                }
                ?>
                <?php
                if (get_previous_posts_link()) {
                    previous_posts_link();
                }
                ?>

            <?php else : ?>

                <p>No posts found. :(</p>

            <?php endif; ?>

        </div>
    </div>
</div>