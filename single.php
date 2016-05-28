<?php get_header(); ?>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div class="main">
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
              <h1 class="articleTitle xingothic-sc-w7"><?php the_title() ?></h1>
            </div>
            <div class="articleBody xingothic-sc-w4 text-justify text-justify"><?php the_content(); ?></div>
            <div class="comment">
              <?php if ( comments_open() || get_comments_number() ) {comments_template();} ?>
            </div>
          </div>
        </div>
        </div>
      </div>

<?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>