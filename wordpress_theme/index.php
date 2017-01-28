<?php get_header(); ?>

<div class="bodycontainer">
    <div class="container">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <h1 class="title <?php if (in_category('playlist')) {echo 'playlist';} elseif (in_category('event')){ echo 'event';} else {echo 'uncat'; }?>"><?php the_title(); ?></h1>
            <div class="postcontent">
                <?php the_content(); ?>
            </div>
        </div>
<?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
