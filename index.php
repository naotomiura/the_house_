<?php get_header(); ?>
    <div class="m_kv m_kv_js_problem">
      <div class="top_kv-img-wrap">
        <h2 class="top_kv-text">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/top/top_kv.png"
            class="top_kv-text-img"
            width="478"
            height="480"
            alt="山口の休日を創る"
          />
        </h2>
      </div>
    </div>
    <main class="l_main">
      <section class="top_obsession top_obsession_js_problem">
        <div class="top_obsession__sp">
          <h2 class="top_obsession-tit">the HOUSEの<br />こだわり</h2>
          <div class="top_obsession-thehouse_wrap">
            <div class="top_obsession-thehouse-text-img__wrap">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/top/the HOUSE.svg"
                class="top_obsession-thehouse-text-img"
                alt="the HOUSE"
              />
            </div>
            <div class="top_obsession-thehouse-img__wrap">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/top/top_works_1-sp.jpg"
                class="top_obsession-thehouse-img"
                width="594"
                height="772"
                alt="the HOUSEのこだわり画像"
              />
            </div>
          </div>
          <p class="top_obsession-content">
            人生で一番大きな買い物に<br />なるかもしれないマイホーム。<br />
            悩んだり慎重になるのは当然です。<br />
            だからこそ、お客様が納得できるまで、<br />
            じっくりお付き合いさせていただきます。<br />
          </p>
          <button class="top_obsession-btn">
            <a href="" class="top_obsession-btn__link">View More</a>
          </button>
        </div>
        <div class="top_obsession__pc">
          <div class="top_obsession-content-wrap__pc">
            <div class="top_obsession-thehouse-text-img__wrap__pc">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/top/the HOUSE.svg"
                class="top_obsession-thehouse-text-img__pc"
                alt="the HOUSE"
              />
            </div>
            <div class="top_obsession-thehouse-text-wrap__pc">
              <h2 class="top_obsession-thehouse_title__pc">
                OUR CONCEPT<span class="top_obsession-thehouse_subtitle__pc"
                  >the HOUSEのこだわり</span
                >
              </h2>
              <p class="top_obsession-thehouse-text-content__pc">
                人生で一番大きな買い物に<br />
                なるかもしれないマイホーム。<br />
                悩んだり慎重になるのは当然です。<br />
                だからこそ、お客様が納得できるまで、<br />
                じっくりお付き合いさせていただきます。<br /><br />
                私たちが目指すお家づくりの答え、<br />
                それは常にそのお客様の中にあります。<br />
                何度でもお会いして、たくさんお話しましょう。<br />
                そうすることで、お客様の想いを知り、<br />
                私たちの想いも知っていただけたらと思います。<br />
              </p>

              <button class="top_obsession-btn__pc">
                <a href="" class="top_obsession-btn__link__pc">View More</a>
              </button>
            </div>
            <div class="top_obsession-thehouse-img__wrap__pc">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/top/top_works_1.jpg"
                class="top_obsession-thehouse-img__pc"
                width="2004"
                height="1582"
                alt="the HOUSEのこだわり画像"
              />
            </div>
          </div>
        </div>
      </section>
      <section class="top_works top_works_js_problem">
        <h2 class="m_top-tit">
          WORKS<span class="m_top-subtit">施工事例・実績</span>
        </h2>

        <div class="card01 l-section">
          <div class="l-inner">
        
            <div class="swiper-area">
              <div class="swiper">
                <div class="swiper-wrapper">
                
                <?php $args = array(
                    'numberposts' => 20,    //表示する記事の数の指定
                    'post_type' => 'works'   //投稿タイプの指定
                );
                $posts = get_posts( $args );
                if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>

                  <!-- ここをループ -->
                  <a href="#" class="swiper-slide">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/img/top/top_works_2.jpg"
                      class="top_works-img"
                      width="2004"
                      height="1582"
                    />
                    <p class="top_works-img-more">More</p>
                  </a>
                  <!-- ここをループ -->

                <?php endforeach; ?>
                <?php else : ?> //記事が無い場合
                    <li>記事はまだありません。</li>
                <?php endif;
                wp_reset_postdata(); //クエリのリセット
                ?>

                </div><!-- /swiper-wrapper -->
              </div><!-- /swiper -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div><!-- /swiper-area -->
            <div class="swiper-pagination"></div>
        
          </div>
        </div>
        
        <button class="top_obsession-btn__pc top_view-btn__pc">
          <a href="" class="top_obsession-btn__link__pc top_view-btn__link__pc"
            >View More</a
          >
        </button>
      </section>
      <section class="top_flow top_flow_js_problem">
        <div class="top_flow__sp-container__sp">
          <p class="top_flow__sp-text">
            他にも沢山の<br />施工実績がございます
          </p>
          <button class="top_obsession-btn top_flow-btn">
            <a href="" class="top_obsession-btn__link top_flow-btn__link"
              >View More</a
            >
          </button>
          <div class="top_flow__sp-flow__wrap">
            <p class="top_flow__sp-flow-tit">FLOW</p>
            <p class="top_flow__sp-flow-text">
              ご相談から設計までの流れは<br />こちらからご覧いただけます
            </p>
          </div>
        </div>
        <div class="top_flow__sp-container__pc">
          <div class="top_cta">
            <h2 class="top_cta-text">
              お家でトトノウ。<br />サウナと共にある暮らしを。
            </h2>
            <button class="top_obsession-btn top_flow-btn top_flow-sauna_btn">
              <a
                href=""
                class="top_obsession-btn__link top_flow-btn__link top_flow-sauna_btn__link"
                >View More</a
              >
            </button>
          </div>
        </div>
        <div class="top_flow-container__pc__flow">
          <h2 class="m_top-tit">
            FLOW<span class="m_top-subtit">ご相談から設計までの流れ</span>
          </h2>
          <div class="top_flow-container__pc-img__wrap">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/top/top_flow.jpg"
              class="top_flow-container__pc-img"
              width="2396"
              height="768"
              alt="フロー図"
            />
          </div>

          <button
            class="top_obsession-btn__pc top_view-btn__pc top_flow-btn__pc"
          >
            <a
              href=""
              class="top_obsession-btn__link__pc top_view-btn__link__pc"
            >
              View More</a
            >
          </button>
        </div>
      </section>
      <section class="top_event top_event_js_problem">
        <div class="top_event__container">
          <h2 class="m_top-tit top_event-tit">
            EVENT<span class="m_top-subtit">イベントのお知らせ</span>
          </h2>
          <div class="top_event-item__wrapper">
            <?php $args = array(
                'numberposts' => 3,    //表示する記事の数の指定
                'post_type' => 'event'   //投稿タイプの指定
            );
            $posts = get_posts( $args );
            if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
              <!-- ここをループ -->
              <article class="top_event-item">
                <p class="top_event-item__cat">家展</p>
                <p class="top_event-item__news">家展開催のお知らせ</p>
                <p class="top_event-item__prefa">山口県山口市</p>
                <p class="top_event-item__date">2022/12/12(月)-2022.12.13(火)</p>
                <div class="top_event-item__img-wrap">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/top/top_event.jpg"
                    class="top_event-item__img"
                    width="323"
                    height="204"
                  />
                </div>
              </article>
              <!-- ここをループ -->
            <?php endforeach; ?>
            <?php else : ?> //記事が無い場合
                <li>記事はまだありません。</li>
            <?php endif;
            wp_reset_postdata(); //クエリのリセット
            ?>
          </div>
          <button class="top_obsession-btn top_flow-btn top_event-btn">
            <a
              href=""
              class="top_obsession-btn__link top_flow-btn__link top_event-btn__link"
              >View More</a
            >
          </button>
          <button
            class="top_obsession-btn__pc top_view-btn__pc top_flow-btn__pc top_event-btn__pc"
          >
            <a
              href=""
              class="top_obsession-btn__link__pc top_view-btn__link__pc top_event-btn__link__pc"
            >
              View More</a
            >
          </button>
        </div>
      </section>
    </main>
<?php get_footer(); ?>