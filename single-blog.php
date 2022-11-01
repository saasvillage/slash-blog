<div class="relative bg-white pb-12">
    <div class="relative mx-auto max-w-7xl">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        <?= the_title() ?>
                    </h2>
                    <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
                        <?= the_excerpt() ?>
                    </p>
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
    </div>
</div>


<?php else : ?>

    <p>No posts found. :(</p>

<?php endif; ?>

</div>