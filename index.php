<!DOCTYPE html>
<html>

<head></head>

<body <?php body_class(); ?>>
    <header class="header">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/screenshot.png" alt="Logo">
        </a>
    </header>
    <?php get_header() ?>
    <h1>Coucou !</h1>
    <?php get_footer() ?>

</body>

</html>