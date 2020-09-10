<?php get_header(); ?>

<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
</div>

<main role="main" class="container">
    <div class="row mb-2">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0"><?php the_title(); ?></h3>
                            <div class="mb-1 text-muted"><?php the_time("j F Y H:i"); ?></div>
                            <p class="card-text mb-auto"><?php echo 2; ?></p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="col-md-6">
                <p><?php echo __('Haber içeriği bulunamadı.', 'ah'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</main><!-- /.container -->

<?php get_footer(); ?>