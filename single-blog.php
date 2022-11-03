<div class="relative">
    <div class="grid md:grid-cols-9">
    <div></div>
    <div class="w-full md:col-span-7 bg-white rounded-lg p-12 mb-12 relative mx-auto max-w-7xl">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div>
                    <img class="w-full object-cover" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="">
                    <h1 class="mt-6 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        <?= the_title() ?>
                    </h1>
                    <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
                        <?= the_excerpt() ?>
                    </p>
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
            <div class="bg-gray-50 mt-8 p-12 rounded-md">
            <p class="mt-6 text-xl font-bold tracking-tight text-gray-900 sm:text-2xl">
                Discussions
            </p>
            <?php
            	if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }            
            ?> 
            </div>
    </div>
    <div></div>
    </div>
</div>


<?php else : ?>

    <p>No posts found. :(</p>

<?php endif; ?>

</div>