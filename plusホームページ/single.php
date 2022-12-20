<?php get_header(); ?>

<body class="single-page">
    <header>
        <div class="header-text">
            <h1 class="header-top">
                Plus
            </h1>

        </div>
    </header>
    <?php get_template_part('parts-nav'); ?>
    <section class="news">
        <h1 class="fade-bottom">News</h1>
        <ul class="news-page">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li class="news-list">
                        <div class="flex">
                            <div class="news-date news-page"><?php echo CFS()->get('date'); ?></div>
                            <div class="news-head news-page"><?php echo CFS()->get('title'); ?></div>
                        </div>
                        <p class="news-content news-page news-page-content"><?php echo CFS()->get('text'); ?></p>
                    </li>
            <?php endwhile;
            endif; ?>
        </ul>
    </section>
    <section class="contact">
        <h1 class="fade-bottom">Contact</h1>
        <div class="contact-text fade-bottom">
            Tel:080-8316-0932 <br>
            E-mail:plus-webdesign@outlook.com
        </div>
    </section>
    <?php get_footer(); ?>