<?php get_header(); ?>

<?php
/*
Template Name:ahievement
*/
?>

<body class="achievement-page">
    <header>
        <div class="header-text">
            <h1 class="header-top">
                Plus
            </h1>

        </div>
    </header>
    <?php get_template_part('parts-nav'); ?>

    <section class="achievement ">
        <h1 class="">Achievement</h1>
        <?php
        $args = array(
            'post_type' => 'achievement',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
            <ul class="achievement-box fade-bottom">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="content-box">
                        <div hlef="" class="content">
                            <img src="<?php echo CFS()->get('image'); ?>" alt="" class="box-img">
                            <div class="box-text"><?php echo CFS()->get('name'); ?></div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <?php endif; ?>
    </section>
    <section class="achievement-text">
        これまでの成績実績です。<br>
        クリックしていただけますと各サイトをご覧いただけます。
    </section>
    <section class="contact">
        <h1 class="">Contact</h1>
        <div class="contact-text">
            Tel:080-8316-0932 <br>
            E-mail:plus-webdesign@outlook.com
        </div>
    </section>
    <?php get_footer(); ?>