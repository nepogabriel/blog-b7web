<?php
get_header();

//Banner Home
get_template_part('template_parts/banner-single');
?>

<section>
    <div class="container">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                        <h1> <?php the_title(); ?> </h1>

                        <div class="post_content">
                            <?php the_content(); ?>
                        </div>

                        <hr>

                        <h4>Confira outros <Strong>Posts Relacionados:</strong></h4>

                        <hr>
                        
                        <?php
                            if(comments_open()) {
                                comments_template();
                            }
                        ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>