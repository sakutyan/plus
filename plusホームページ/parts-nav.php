<div class="nav" id="nav">
    <nav class="fade-bottom">
        <ul>
            <?php if (is_front_page()) { ?>
                <a href="<?php bloginfo('url'); ?>/about/" id="b-aboutus">
                    <li>About us</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/clue/" id="clue">
                    <li>Clue</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/achievement/" id="achievement">
                    <li>Achievement</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/news/" id="news">
                    <li>News</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/service/" id="service">
                    <li>Service</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/contact/" id="contact">
                    <li>Contact</li>
                </a>
            <?php } else if (is_page('about')) { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" id="b-aboutus">
                    <li>Top-page</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/clue/" id="clue">
                    <li>Clue</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/achievement/" id="achievement">
                    <li>Achievement</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/news/" id="news">
                    <li>News</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/service/" id="service">
                    <li>Service</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/contact/" id="contact">
                    <li>Contact</li>
                </a>
            <?php } else if (is_page('clue')) { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" id="b-aboutus">
                    <li>Top-page</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/about/" id="b-aboutus">
                    <li>About us</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/achievement/" id="achievement">
                    <li>Achievement</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/news/" id="news">
                    <li>News</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/service/" id="service">
                    <li>Service</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/contact/" id="contact">
                    <li>Contact</li>
                </a>
            <?php } else if (is_page('achievement')) { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" id="b-aboutus">
                    <li>Top-page</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/about/" id="b-aboutus">
                    <li>About us</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/clue/" id="clue">
                    <li>Clue</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/news/" id="news">
                    <li>News</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/service/" id="service">
                    <li>Service</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/contact/" id="contact">
                    <li>Contact</li>
                </a>
            <?php } else if (is_archive()) { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" id="b-aboutus">
                    <li>Top-page</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/about/" id="b-aboutus">
                    <li>About us</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/clue/" id="clue">
                    <li>Clue</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/achievement/" id="achievement">
                    <li>Achievement</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/service/" id="service">
                    <li>Service</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/contact/" id="contact">
                    <li>Contact</li>
                </a>
            <?php } else if (is_page('service')) { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" id="b-aboutus">
                    <li>Top-page</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/about/" id="b-aboutus">
                    <li>About us</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/clue/" id="clue">
                    <li>Clue</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/achievement/" id="achievement">
                    <li>Achievement</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/news/" id="news">
                    <li>News</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/contact/" id="contact">
                    <li>Contact</li>
                </a>
            <?php } else if (is_page('contact')) { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" id="b-aboutus">
                    <li>Top-page</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/about/" id="b-aboutus">
                    <li>About us</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/clue/" id="clue">
                    <li>Clue</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/achievement/" id="achievement">
                    <li>Achievement</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/news/" id="news">
                    <li>News</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/service/" id="service">
                    <li>Service</li>
                </a>
            <?php } else if (is_single()) { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" id="b-aboutus">
                    <li>Top-page</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/about/" id="b-aboutus">
                    <li>About us</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/clue/" id="clue">
                    <li>Clue</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/achievement/" id="achievement">
                    <li>Achievement</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/news/" id="news">
                    <li>News</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/service/" id="service">
                    <li>Service</li>
                </a>
                <a href="<?php bloginfo('url'); ?>/contact/" id="contact">
                    <li>Contact</li>
                </a>
            <?php } else {
            } ?>
        </ul>
    </nav>
</div>