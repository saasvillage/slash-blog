<html>

<head>
    <title><?php if (is_front_page()) { ?><?php bloginfo('title'); ?> - <?php bloginfo('description');
                                                                    } else {
                                                                        wp_title('-', 'true', 'right');
                                                                        bloginfo('title');
                                                                    } ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <?php wp_head(); ?>
    <?php include("gtm_head.php") ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body class="bg-gray-50">
    <?php include("gtm_body.php") ?>
    <?php include("nav.php") ?>
    <div class="md:mt-0 py-6 pt-12 px-2 md:px-12 bg-gray-100">