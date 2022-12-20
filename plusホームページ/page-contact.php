<?php get_header(); ?>

<body>
    <header>
        <div class="header-text">
            <h1 class="header-top">
                Plus
            </h1>

        </div>
    </header>
    <?php get_template_part('parts-nav'); ?>
    <section class="contact">
        <h1 class="">Contact</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="contact-text ">
                    <?php the_content(); ?>
                    <br>
                    Tel:080-8316-0932 <br>
                    E-mail:plus-webdesign@outlook.com
                </div>
        <?php endwhile;
        endif; ?>
    </section>
    <?php get_footer(); ?>