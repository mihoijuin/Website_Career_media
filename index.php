<?php get_header(); ?>
    <!-- main -->
    <main>
      <div class="main-wrapper">
        <img class="heading" src="<?php echo get_template_directory_uri(); ?>/images/post-title.svg" alt="">
        <div class="posts">
            <?php
            if (have_posts()) :
                while(have_posts()):
                    the_post();
                    ?>

          <article class="post">
            <a href="<?php the_permalink(); ?>">
              <header>
                <h3 class="post-title"><?php the_title(); ?></h3>
                <p class="post-category"><?php the_category(','); ?></p>
              </header>
              <p class="post-txt"><?php the_excerpt(); ?></p>
              <p class="released-date"><?php echo get_the_date(); ?></p>
            </a>
          </article>

                    <?php
                endwhile;
          else:
                ?>

          <p>記事はまだないみたいだ。</p>

                <?php
          endif;
            ?>

          <nav class="page-nav">
            <ul>
              <li>1</li>
              <li>2</li>
              <li>3</li>
              <li>4</li>
            </ul>
          </nav>
        </div>
      </div>
    </main>

<?php get_footer(); ?>