<?php get_header(); ?>

<div class="wrap-container zerogrid">
    <h1>Знаменитые и талантливые гирейцы</h1>
    <div id="main-content" class="col-2-3">
        <div class="wrap-col">
            <div class="wrap-content">

                <?php foreach (getPersons() as $post ): ?>

                    <article>
                        <div class="art-header">
                            <a href="<?php the_permalink();?>"></a>
                            <div class="photo_person_archive"><a href="<?php the_permalink();?>"><?php the_post_thumbnail() ?></a></div>
                        </div>
                        <div class="art-content">
                            <a  class="person_permalink" href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>

                            <?php if (get_field( 'deathday' )) : ?>
                                <span> <?php   echo get_field( 'birthday' ); ?> - <?php echo get_field( 'deathday' ); ?></span><br>
                             <?php  else: ?>
                             <?php if (get_field( 'birthday' )) : ?>
                                <span>род. <?php echo get_field( 'birthday' ); ?> </span><br>
                            <?php  endif; ?>
                            <?php  endif; ?>
                            <strong><?php echo get_field( 'profession' ); ?></strong>

                        </div>
                    </article>
                <?php	endforeach; ?>

                <?php the_posts_pagination() ?>
            </div>
        </div>



    </div>
    <div id="sidebar" class="col-1-3">
        <?php get_sidebar();?>
    </div>

</div>

<?php get_footer(); ?>
