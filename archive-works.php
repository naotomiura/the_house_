<?php get_header(); ?>
    <main class="l_main">
        <ul>
            <?php $args = array(
                'numberposts' => 20,    //表示する記事の数の指定
                'post_type' => 'works'   //投稿タイプの指定
            );
            $posts = get_posts( $args );
            if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
                <section class="case_section">
                    <div class="l_contents">
                    <div class="case_section-inner case_section-inner__right">
                        <div class="case_section_wrapper">
                            <a href="<?php echo get_permalink( $post -> ID ); ?>"><?php the_post_thumbnail( ); ?></a>
                        </div>
                        <!-- /.case_section_wrapper -->
                        <div class="case_section_content">
                        <h2 class="case_section_title">
                            <?php the_title(); ?>
                        </h2>
                        <p class="case_section_txt">
                            <?php echo post_custom('物件コンセプト'); ?>
                        </p>
                        <p class="case_section_txt">
                            <?php echo post_custom('物件のこだわりポイント'); ?>
                        </p>
                        <p class="case_section_txt">
                            <?php echo post_custom('敷地面積'); ?>
                        </p>
                        <p class="case_section_txt">
                            <?php echo post_custom('延床面積'); ?>
                        </p>
                        <p class="case_section_txt">
                            <?php echo post_custom('構造'); ?>
                        </p>
                        <p class="case_section_txt">
                            <?php echo post_custom('項目'); ?>
                        </p>
                        <p class="case_section_txt">
                            <?php the_content(); ?>
                        </p>
                        </div>
                        <!-- /.case_section_content -->
                    </div>
                    <!-- /.case_section-inner -->
                    </div>
                    <!-- /.l_contents -->
                </section>
            <?php endforeach; ?>
            <?php else : ?> //記事が無い場合
                <li>記事はまだありません。</li>
            <?php endif;
            wp_reset_postdata(); //クエリのリセット
            ?>
        </ul>
    </main>
<?php get_footer(); ?>