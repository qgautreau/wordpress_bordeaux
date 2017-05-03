<?php /* Default template for displaying page content */ ?>
    <article class="miniposts" id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title('<h3 class="entry-title page-title">', '</h3>'); ?>
        </header>
        <div class="entry-content clearfix">
            <?php the_content(); ?>
        </div>
    </article>
