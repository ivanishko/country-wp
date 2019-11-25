<?php get_header(); ?>

<div class="wrap-container zerogrid">
    <h1></h1>
    <div id="main-content" class="col-2-3">
        <div class="wrap-col">
            <div class="wrap-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article>
                        <div class="art-header"><a href="<?php the_permalink();?>"><?php the_post_thumbnail() ?></a></div>
                        <div class="art-content">
                            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                            <div class="info">Опубликованно <?php the_date();?></div>

                            <a class="button button02" href="<?php the_permalink();?>">ЧИТАТЬ ДАЛЕЕ...</a>
                        </div>
                    </article>
                <?php endwhile; else: ?>
                    <p><?php _p('Публикации не найдены'); ?></p>
                <?php endif; ?>
                <?php the_posts_pagination() ?>
            </div>
        </div>



    </div>
    <div id="sidebar" class="col-1-3">
        <?php get_sidebar();?>
    </div>

</div>

<?php get_footer(); ?>
