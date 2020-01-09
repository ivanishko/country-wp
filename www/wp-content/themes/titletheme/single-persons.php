<?php get_header(); ?>

<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div id="main-content" class="col-2-3">
            <div class="wrap-col">
                <div class="wrap-content">
                    <?php the_post(); ?>
                    <article>
                        <div class="art-header">
                        </div>
                        <div class="art-content">
                            <h3 style="font-size: 37px; line-height: 1.5;"><?php the_title() ?></h3>
                            <?php if (get_field( 'deathday' )) : ?>
                                <span> <?php   echo get_field( 'birthday' ); ?> - <?php echo get_field( 'deathday' ); ?></span><br>
                            <?php  else: ?>
                                <?php if (get_field( 'birthday' )) : ?>
                                    <span>род!. <?php echo get_field( 'birthday' ); ?> </span><br>
                                <?php  endif; ?>
                            <?php  endif; ?>
                            <div class="excerpt">
                                <div class="photo_person"><?php the_post_thumbnail() ?></div>

<!--                                --><?php //echo get_field( 'biography' ); ?>
                                <?php echo the_content(); ?>
                            </div>
                    </article>
                </div>
            </div>
        </div>
        <div id="sidebar" class="col-1-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
