<?php get_header(); ?>
    <div class="">
      <div class="construction-detail_kv-img-wrap">
          <!-- <img
            src="<?php echo get_template_directory_uri(); ?>/img/works_sub/ws_kv.jpg"
            class="top_kv-text-img"
            width="478"
            height="480"
            alt="construction-detail_kv"
          /> -->
      </div>
    </div>

    <main class="l_main">
      <div class="construction-detail">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
        <section class="construction-detail_container">
          <div class="construction-detail-title">
            <h2 class="construction-detail-tit"><?php the_title(); ?></h2>
            <h3 class="construction-detail-sub-tit"><?php the_content(); ?></h3>
          </div>
          <div class="construction-detail_container_wrapper_sp">
            <div class="construction-detail_container_sp">
              <div class="construction-detail_flex-item-1">
                <table class="construction-detail-table">
                    <tbody>
                      <tr>
                        <th class="construction-detail-table-row1">敷地面積</th>
                        <td class="construction-detail-table-row2"><?php echo post_custom('敷地面積'); ?></td>
                      </tr>
                      <tr class="construction-detail-table-tr">
                        <th class="construction-detail-table-row1">延床面積</th>
                        <td class="construction-detail-table-row2"><?php echo post_custom('延床面積'); ?></td>
                      </tr>
                      <tr class="construction-detail-table-tr">
                        <th class="construction-detail-table-row1">構造</th>
                        <td class="construction-detail-table-row2"><?php echo post_custom('構造'); ?></td>
                      </tr>
                      <tr class="construction-detail-table-tr">
                        <th class="construction-detail-table-row1">項目</th>
                        <td class="construction-detail-table-row2"><?php echo post_custom('項目'); ?></td>
                      </tr>
                    </tbody>
                </table>
              </div>
              <div class="construction-detail_flex-item-2">
                <h2 class="construction-detail-consept-tit">物件コンセプト</h2>
                <p class="construction-detail-consept-txt"><?php echo post_custom('物件コンセプト'); ?></p>
              </div>
              <div class="construction-detail_flex-item-3">
                <h2 class="construction-detail-point-tit">物件のこだわりポイント</h2>
                <p class="construction-detail-point-txt"><?php echo post_custom('物件のこだわりポイント'); ?></p>
              </div>
            </div>
            <div class="construction-detail_img-detail-container">
              <div class="construction-detail_img-detail_wrap">
                <img
                  src="<?php the_field('画像１(PC)'); ?>"
                  alt="ws_7"
                />
              </div>
              <div class="construction-detail_img-detail_wrap">
                  <img
                    src="<?php the_field('画像２(PC)'); ?>"
                    alt="ws_8"
                  />
              </div>
            </div>
          </div>
        </section>
        <section class="construction-detail_img-container">
            <div class="construction-detail_img_wrap">
                <img
                  src="<?php the_field('画像１'); ?>"
                  alt="ws_1"
                  onclick="changeBackground('<?php the_field('画像１'); ?>')"
                />
            </div>
            <div class="construction-detail_img_wrap">
                <img
                  src="<?php the_field('画像２'); ?>"
                  alt="ws_2"
                  onclick="changeBackground('<?php the_field('画像２'); ?>')"
                />
            </div>
            <div class="construction-detail_img_wrap">
                <img
                  src="<?php the_field('画像３'); ?>"
                  alt="ws_3"
                  onclick="changeBackground('<?php the_field('画像３'); ?>')"
                />
            </div>
            <div class="construction-detail_img_wrap">
                <img
                  src="<?php the_field('画像４'); ?>"
                  alt="ws_4"
                  onclick="changeBackground('<?php the_field('画像４'); ?>')"
                />
            </div>
            <div class="construction-detail_img_wrap">
                <img
                  src="<?php the_field('画像５'); ?>"
                  alt="ws_5"
                  onclick="changeBackground('<?php the_field('画像５'); ?>')"
                />
            </div>
            <div class="construction-detail_img_wrap">
                <img
                  src="<?php the_field('画像６'); ?>"
                  alt="ws_6"
                  onclick="changeBackground('<?php the_field('画像６'); ?>')"
                />
            </div>
        </section>
      </div>
    </main>
<?php get_footer(); ?>