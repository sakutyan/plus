<?php get_header(); ?>

<body class="clue-page">
    <header>
        <div class="header-text">
            <h1 class="header-top">
                Plus
            </h1>
        </div>
    </header>
    <?php get_template_part('parts-nav'); ?>
    <section class="clue">
        <h1 class="">clue</h1>
        <div class="desc-top">Designer・Engineer</div>
        <div class="clue-info">
            <img src="<?php echo get_template_directory_uri(); ?>/img/takumi.png" alt="" class="clue-photo">
            <div class="clue-desc">
                <div class="desc-text">
                    Name:櫻井 拓海<br>
                    <br>
                    Birthday:2001.07.06 <br>
                    <br>
                    History: <br>

                    國學院大學 ３年<br>
                    １年間の独学の末、HP製作チームを設立。<br>
                    チームではデザイン・コーディング・サーバーへのアップロードなど技術部門を請け負う。
                    <br>
                    <br>
                    週に10回はマクドナルドを食べる。<br>
                    「はじめの一歩」で人生を学ぶ。
                </div>
            </div>
        </div>
        <div class="desc-top">Sales</div>
        <div class="clue-info">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ryusei.png" alt="" class="clue-photo">
            <div class="clue-desc">
                <div class="desc-text">Name:木下 琉晴<br>
                    History:現在全国を旅をしながら日々成長中。将来は銭湯経営を目指す。
                    趣味はサウナ。
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <h1 class="">Contact</h1>
        <div class="contact-text ">
            Tel:080-8316-0932 <br>
            E-mail:plus-webdesign@outlook.com
        </div>
    </section>
    <?php get_footer(); ?>