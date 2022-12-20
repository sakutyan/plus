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
    <section class="news fade-bottom">
        <h1 class="fade-bottom">News</h1>
        <ul class="fade-bottom">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                               <a href="<?php the_permalink(); ?>">
                        <li class="news-list">
                            <div class="news-date"><?php echo CFS()->get('date'); ?></div>
                            <div class="news-head"><?php echo CFS()->get('title'); ?></div>
                            <p class="news-content"><?php echo CFS()->get('text'); ?></p>
                        </li>
                <?php endwhile;
            endif; ?>
                    </a>
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