<?php get_header('front'); ?>

    <?php while(have_posts()) : the_post(); ?>

    <section class="welcome text-center section">
        <h2 class="text-primary"><?php the_field('welcome_heading'); ?></h2>
        <p><?php the_field('welcome_text'); ?></p>
    </section>

    <section>
        <ul class="area-container">
            <li class="area">
                <?php 
                    $area_1 = get_field('area1');
                    $image = wp_get_attachment_image_src( $area_1['area_image'], 'mediumSize')[0];
                ?>
                <img src="<?php echo $image ?>" />  
                <p><?php echo $area_1['area_name']; ?></p>
            </li>
            <li class="area">
                <?php 
                    $area_2= get_field('area2');
                    $image = wp_get_attachment_image_src( $area_2['area_image'], 'mediumSize')[0];
                ?>
                <img src="<?php echo $image ?>" />  
                <p><?php echo $area_2['area_name']; ?></p>
            </li>
            <li class="area">
                <?php 
                    $area_3 = get_field('area3');
                    $image = wp_get_attachment_image_src( $area_3['area_image'], 'mediumSize')[0];
                ?>
                <img src="<?php echo $image ?>" />  
                <p><?php echo $area_3['area_name']; ?></p>
            </li>
            <li class="area">
                <?php 
                    $area_4 = get_field('area4');
                    $image = wp_get_attachment_image_src( $area_4['area_image'], 'mediumSize')[0];
                ?>
                <img src="<?php echo $image ?>" />  
                <p><?php echo $area_4['area_name']; ?></p>
            </li>
        </ul>
    </section>

    <section class="class-homepage">
        <div class="container section">
            <h2 class="text-primary text-center">Our Classes</h2>

            <?php fitness_classes_list(4); ?>

            <div class="button-container">
                <a class="btn" href="<?php echo get_permalink(get_page_by_title('Classes'));?>">
                    View all Classes
                </a>
            </div>

        </div>
    </section>

    <section class="test">
        <h2 class="text-center">Testimonials</h2>
        <div class="container-test">
            <ul class="test-list">
                <?php 
                    $args = array(
                        'post_type' => 'testimonials',
                        'post_per_page' => 10
                    );

                    $test = new WP_Query($args);
                    while($test->have_posts()): $test->the_post();
                ?>
                <li class="tets text-center">
                    <blockquote>
                        <?php the_content(); ?>
                    </blockquote>

                    <footer class="test-footer">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <p><?php the_title(); ?></p>
                    </footer>
                </li>

                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>

    <section class= "blog container section">
        <h2 class="text-center">Fitness Blog</h2>
        <p class="text-center">Read our blog to help you achieve your fitness goal!</p>
        <ul class="blog-entries">
        <?php $args = array(
            'post_type' => 'post',
            'post_per_page' => 4
        ); 
            $blog = new WP_Query($args);
            while($blog ->have_posts()): $blog->the_post() ?>
             <?php get_template_part('template-parts/blog', 'loop'); ?>
            <?php endwhile; wp_reset_postdata() ?>
        </ul>
    </section>

    <?php endwhile; ?>

<?php get_footer(); ?>