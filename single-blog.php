<div class="relative mt-4 md:mt-0">
    <div class="grid md:grid-cols-9">
    <div></div>
    <div class="blog-content w-full md:col-span-5 bg-white rounded-lg p-2 mt-4 md:p-6 mb-12 relative mx-auto max-w-7xl pb-12 md:pb-12">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <img class="w-full rounded-md object-cover" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="">
                <div class="px-4 md:px-6">
                    <h1 class="my-12 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        <?= the_title() ?>
                    </h1>
                    <div class="mx-auto text-gray-500 text-xl">
                        <?= the_excerpt() ?>
                    </div>
                    <section class="mt-4">
                        <?= the_content() ?>
                    </section>
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
            <div class="bg-gray-50 mt-8 p-4 md:p-12  rounded-md">
            <p class="text-xl font-bold tracking-tight text-gray-900 sm:text-2xl">
                Discussions
            </p>
            <?php
            	if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }            
            ?> 
            </div>
    </div>
    <div class="mt-4 w-full  md:col-span-3 lg:col-span-2">
        <?php get_sidebar() ?>
    </div>
    <div></div>
    </div>
</div>


<?php else : ?>

    <p>No posts found. :(</p>

<?php endif; ?>

</div>