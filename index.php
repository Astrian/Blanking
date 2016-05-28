<?php get_header(); ?>

<script>$(".navitem-index").addClass("active");</script>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div class="posts">
        <div class="container post">
          <div class="row">
          <div class="col-md-offset-1 col-md-2 articleMeta text-right xingothic-sc-w4">
            <p><span id='postdate-<?php the_ID(); ?>' class='postdate xingothic-sc-w7'><?php the_time('d'); ?></span><br><span id='postyear-<?php the_ID(); ?>' class='postyear'><?php the_time('Y'); ?></span> 年 <span id='postmonth-<?php the_ID(); ?>' class='postmonth'><?php the_time('m'); ?></span> 月</p>
            <script>
              /*moment.locale('zh-cn');
              var date = moment("{{p.date}}");
              $("#postdate-<?php the_ID(); ?>").html(date.format("D"));
              $("#postyear-<?php the_ID(); ?>").html(date.format("Y"));
              $("#postmonth-<?php the_ID(); ?>").html(date.format("M"));*/
            </script>
            <p>作者<br><?php the_author_meta('user_nicename') ?></p>
            <p>分类于<br><?php the_category('<br>') ?></p>
          </div>
          <div class="article col-md-8">
            <div class="articleHead">
              <a href="<?php the_permalink(); ?>"><h1 class="articleTitle xingothic-sc-w7"><?php the_title() ?></h1></a>
            </div>
            <div class="articleBody xingothic-sc-w xingothic-sc-w4"><?php the_content(); ?><p class="readmore xingothic-sc-w4"><a href='<?php the_permalink(); ?>'>阅读全文</a></p></div>
          </div>
        </div>
        </div>
        <div class='splash'>
          <div class='splashline'></div>
        </div>
      </div>
<?php endwhile; ?>

<?php endif; ?>



<?php get_footer(); ?>