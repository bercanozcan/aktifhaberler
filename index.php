<?php get_header(); ?>

<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-9 px-0">
        <div class="manset-haberler slider slider-single">
            <?php for($i=1; $i<11; $i++){ ?>
            <div>
                <div class="manset-image" style="background-image:url();">
            </div>
            <?php } ?>
        </div>
        <div class="slider slider-nav">
            <?php for($i=1; $i<11; $i++){ ?>
            <div>
                <span class="ah-nav"><span><?php echo $i;?></span></span>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-3 px-0">

    </div>
</div>

<main role="main" class="container">
    <div class="row mb-2">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo '<a class="d-inline-block mb-2 text-primary" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                            }
                            ?>
                            <h3 class="mb-0 haber-baslik"><?php the_title(); ?></h3>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php $attachment_image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                                <div class="haber-image" style="background-image:url(<?php echo $attachment_image; ?>);"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo '<a class="d-inline-block mb-2 text-primary" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                            }
                            ?>
                            <h3 class="mb-0 haber-baslik"><?php the_title(); ?></h3>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php $attachment_image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                                <div class="haber-image" style="background-image:url(<?php echo $attachment_image; ?>);"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo '<a class="d-inline-block mb-2 text-primary" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                            }
                            ?>
                            <h3 class="mb-0 haber-baslik"><?php the_title(); ?></h3>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php $attachment_image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                                <div class="haber-image" style="background-image:url(<?php echo $attachment_image; ?>);"></div>
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