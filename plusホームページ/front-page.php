<?php get_header(); ?>

<body>
    <header>
        <div class="header-text">
            <h1 class="header-top delay-fade">
                Plus
            </h1>
        </div>
    </header>
    <?php get_template_part('parts-nav'); ?>
    <section class="top-head">
        <h1 class="fade-bottom">More value for you.</h1>
        <div class="top-text fade-bottom">あなたにプラスの価値を。<br>
            新たな一歩を踏み出すあなたをサポート致します。
        </div>
    </section>
    <section class="about-us">
        <h1 class="fade-bottom">About-us</h1>
        <div class="text fade-bottom">
            １９９１年にウェブサイトが誕生してから３０年余り、現在日本では約90％の人口に当たる１億人前後の人がインターネットを使用しています。現代社会においてホームページは情報発信の要ともいえます。<br>
            <br>
            <br>
            私たちはHP製作チームとして皆様にプラスの価値を提供しています。<br>
            デザイン・コーディング・サーバーへのアップロード等全ての工程をこちらで行います。
        </div>
        <a href="<?php bloginfo('url'); ?>/about/">
            <div class="more-btn fade-bottom bgskew"><span>More →</span></div>
        </a>
    </section>
    <section class="clue">
        <h1 class="fade-bottom">clue</h1>
        <div class="clue-info fade-left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/takumi.png" alt="" class="clue-photo">
            <div class="clue-desc">
                <div class="desc-top">Designer・Engineer</div>
                <div class="desc-text">Name:櫻井 拓海<br>
                    History:國學院大學 <br>
                    １年間の独学の末、HP製作チームを設立。趣味は「はじめの一歩」。
                    　　　　　　　　　 </div>
            </div>
        </div>
        <div class="clue-info fade-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ryusei.png" alt="" class="clue-photo">
            <div class="clue-desc">
                <div class="desc-top">Sales</div>
                <div class="desc-text">Name:木下 琉晴<br>
                    History:現在全国を旅をしながら日々成長中。将来は銭湯経営を目指す。
                    趣味はサウナ。
                </div>
            </div>
        </div>
        <a href="<?php bloginfo('url'); ?>/clue/">
            <div class="more-btn fade-bottom bgskew"><span>More →</span></div>
        </a>
    </section>
    <section class="achievement ">
        <h1 class="fade-bottom">Achievement</h1>
        <?php
        $args = array(
            'post_type' => 'achievement',
            'posts_per_page' => 3
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
        <a href="<?php bloginfo('url'); ?>/achievement/">
            <div class="more-btn fade-bottom bgskew"><span>More →</span></div>
        </a>
    </section>
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
        <a href="<?php bloginfo('url'); ?>/news/">
            <div class="more-btn fade-bottom bgskew"><span>More →</span></div>
        </a>
    </section>
    <section class="service">
        <h1 class="fade-bottom">Service</h1>
        <div class="service-box">
            <div class="box-head fade-bottom">
                〜Contents〜
            </div>
            <div class="box-text fade-bottom">
                デザイン・コーディング・サーバー設定まで全面的にサポート
            </div>
            <div class="box-head fade-bottom">
                〜Price〜
            </div>
            <div class="box-text fade-bottom">
                Top-page:3〜５万円<br>
                Sub-page:１万円<br>
                ※機能や量によりお値段は変化します。<br>
            </div>
        </div>
        <a href="<?php bloginfo('url'); ?>/service/">
            <div class="more-btn fade-bottom bgskew"><span>More →</span></div>
        </a>
    </section>
    <section class="contact">
        <h1 class="fade-bottom">Contact</h1>
        <div class="contact-text fade-bottom">
            Tel:080-8316-0932 <br>
            E-mail:plus-webdesign@outlook.com
        </div>
    </section>
    <?php get_footer(); ?>