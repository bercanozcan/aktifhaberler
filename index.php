<?php get_header(); ?>

<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-9 px-0">
        <div class="manset-haberler slider slider-single">
            <div>
                <h3>1</h3>
            </div>
            <div>
                <h3>2</h3>
            </div>
            <div>
                <h3>3</h3>
            </div>
            <div>
                <h3>4</h3>
            </div>
            <div>
                <h3>5</h3>
            </div>
            <div>
                <h3>6</h3>
            </div>
            <div>
                <h3>7</h3>
            </div>
            <div>
                <h3>8</h3>
            </div>
            <div>
                <h3>9</h3>
            </div>
            <div>
                <h3>10</h3>
            </div>
        </div>
        <div class="slider slider-nav">
            <?php for($i=1; $i<11, $i++){ ?>
            <div>
                <h3><span><?php echo $i;?></span></h3>
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