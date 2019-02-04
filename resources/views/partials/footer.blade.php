<footer class="footer">
    @php
        $custom_body_class = get_field('custom_body_class', 'option');
    @endphp

    <?php if($custom_body_class === 'stichting') : ?>

        <?php if(have_rows('logo_slider', 'option')) : ?>
        <div class="logo__slider-wrapper">
            <div class="center">
                <div class="logo__slider">
                    <?php while(have_rows('logo_slider', 'option'))  : the_row(); ?>
                    <?php $logo_img_id = get_sub_field('logo'); ?>
                    <?php $logo_img_url = wp_get_attachment_image_src($logo_img_id, 'image-logo'); ?>
                    <div class="logo_slide">
                        <img src="<?php echo $logo_img_url[0]; ?>" alt="<?php echo get_the_title($logo_img_id); ?>">
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

    <?php else: ?>

    <div class="footer-sitemap">
        <div class="center">
            @php dynamic_sidebar('sidebar-footer') @endphp
        </div>
    </div>
    <?php endif; ?>
</footer>

