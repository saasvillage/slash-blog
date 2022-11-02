<div class="relative">
    <div class="grid md:grid-cols-4">
    <div class="w-full col-span-3 bg-white rounded-lg p-12 mb-12 relative mx-auto max-w-7xl">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        <?= the_title() ?>
                    </h2>
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
    </div>
    <div>
        <?php include("sidebar.php") ?>
    </div>
    </div>
</div>


<?php else : ?>

    <p>No posts found. :(</p>

<?php endif; ?>

</div>