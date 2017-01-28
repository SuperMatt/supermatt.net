<?php get_header(); ?>

<div class="bodycontainer">
    <div class="container">

<?php

$posts = get_posts(array(
    'post_type' => 'events',
    'posts_per_page' => -1,
    'meta_key' => 'date',
    'orderby' => 'meta_value',
    'order' => 'ASC',
));

$today = date('Ymd');

$allevents = get_query_var('allevents', false);

if ($allevents) : ?>
        <div class="eventtoggle">
            <a href="<?php echo remove_query_arg('allevents') ?>">Hide past events</a>
        </div>
<?php else: ?>
        <div class="eventtoggle">
            <a href="<?php echo add_query_arg(array('allevents' => 'true')) ?>">Show past events</a>
        </div>
<?php endif; ?>

<div class="spacer50"></div>

<?php if ($posts): ?>

    <?php foreach ($posts as $post): setup_postdata($post); ?>
        <?php if ($allevents || get_field('date') >= $today ): ?>
        <div class="post">
            <h1 class="title"><?php $date = get_field("date"); echo substr($date,6,2) . "/" . substr($date,4,2) . "/" . substr($date,0,4) . " - "; the_title(); ?></h1>
            <div class="postmeta">
                <p>Location: <a href="<?php the_field("location_website")?>"><?php the_field("location") ?></a></p>
                <p>Event page: <a href="<?php the_field("event_website")?>">Link</a></p>
            </div>
            <div class="postcontent">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endif; ?>
<?php endforeach; wp_reset_postdata(); endif; ?>
    </div>
</div>

<?php get_footer(); ?>
