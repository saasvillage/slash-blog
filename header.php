<html>

<head>
    <title><?php if (is_front_page()) { ?><?php bloginfo('title'); ?> - <?php bloginfo('description');
    } else {
        wp_title('-', 'true', 'right');
        bloginfo('title');
    } ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>

<body class="bg-gray-50">
    <?php include("nav.php") ?>
    <div class="mt-6 md:mt-0 py-6 pt-24 px-2 md:px-12 bg-gray-50">