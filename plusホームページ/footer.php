    <button class="humburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </button>
    <div class="menu">
        <ul>
            <ul>
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
            </ul>
        </ul>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fade-in.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/nav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/humburger.js"></script>
    <?php wp_footer(); ?>
    </body>

    </html>