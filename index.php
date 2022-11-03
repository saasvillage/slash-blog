<?php
get_header();

if (is_single()) {
    include("single-blog.php");
} else {
    include("page.php");
}

include("footer.php");
?>
