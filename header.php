<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>the_house</title>
    <meta name="description" content="the_houseのページ" />
    <meta name="format-detection" content="telephone=no" />

    <?php wp_head(); ?>
  </head>

  <body>
    <header class="l_header">
      <h1 class="l_header-logo">
        <a href="<?php echo esc_url( home_url() ); ?>" class="">theHOUSE</a>
      </h1>
      <nav class="l_header-nav js_navigation">
        <ul class="l_header-nav_list">
          <li class="l_header-nav_item">
            <a href="<?php echo home_url('/consept'); ?>" class="l_header-nav_link">CONSEPT</a>
          </li>
          <li class="l_header-nav_item">
            <a href="<?php echo home_url('/works'); ?>" class="l_header-nav_link">WORKS</a>
          </li>
          <li class="l_header-nav_item">
            <a href="<?php echo home_url('/flow'); ?>" class="l_header-nav_link">FLOW</a>
          </li>
          <li class="l_header-nav_item">
            <a href="<?php echo home_url('/event'); ?>" class="l_header-nav_link">EVENT</a>
          </li>
          <li class="l_header-nav_item">
            <a href="<?php echo home_url('/company'); ?>" class="l_header-nav_link">COMPANY</a>
          </li>
          <li class="l_header-nav_item">
            <a href="<?php echo home_url('/privacypolicy'); ?>" class="l_header-nav_link">PRIVACY POLICY</a>
          </li>
          <li class="l_header-nav_item l_header-nav_item_contact">
            <a href="<?php echo home_url('/contact'); ?>" class="l_header-nav_link">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <button class="m_hamburger js_hamburger">
        <span class="m_hamburger-bar"></span>
        <span class="m_hamburger-bar"></span>
        <span class="m_hamburger-bar"></span>
      </button>
    </header>