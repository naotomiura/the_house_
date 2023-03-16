<?php

    // 投稿にアイキャッチ画像を追加
    add_theme_support('post-thumbnails');

    add_action('wp_enqueue_scripts', 'add_styles');

    function add_styles() {
        // google fonts
        wp_enqueue_style( 'noto-serif-jp', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap', array(), null );
        wp_enqueue_style( 'gfs-didot', 'https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap', array(), null );
        wp_enqueue_style( 'noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap', array(), null );

        // reset style
        wp_register_style(
        'reset_style',
        get_template_directory_uri() . '/css/reset.css',
        array(),
        '1.0'
        );

        // swiper style
        wp_register_style(
            "swiper-css",
            "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
          );
        wp_enqueue_style( 'swiper-css');

        // main style
        wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style'),
        '1.0'
        );
    }

    // jsの読み込み
    add_action('wp_enqueue_scripts', 'add_scripts');

    function add_scripts() {
        // デフォルトのjQueryを削除
        wp_deregister_script('jquery');

        // jQueryを読み込む
        wp_register_script(
            'jquery_script',
            'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
            array(),
            '1.0'
        );

        // GSAPを読み込む
        wp_register_script(
            'gsap_script',
            'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js',
            array(),
            '1.0'
        );

        // Swiperを読み込む
        wp_register_script(
            'swiper_script',
            'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js',
            array(),
            '1.0'
        );

        // ScrollTriggerを読み込む
        wp_register_script(
            'scrolltrigger_script',
            'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js',
            array(),
            '1.0'
        );
        // ProgressBar.js
        wp_register_script(
          'progressbar_script',
          'https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js',
          array(),
          '1.0'
      );

        // メインのスクリプトを読み込む
        wp_enqueue_script(
            'main_script',
            get_template_directory_uri() . '/js/main.js',
            array('jquery_script','gsap_script','swiper_script','scrolltrigger_script','progressbar_script'),
            '1.0'
        );
    }

    /* main.js にdefer属性を付与 */
    add_filter('script_loader_tag', 'add_defer', 10, 2);
    function add_defer($tag, $handle) {
    // 識別名がmain_script以外はそのまま返却
    if ($handle !== 'main_script') {
        return $tag;
    }

    // deferを追加して返却する
    return str_replace(' src=', ' defer src=', $tag);
    }

?>