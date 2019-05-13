<?php get_header(); ?>

<body>

    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- post -->
                <div class="col-md-12">
                    <div class="card">
                        <img class="card-img-top" src=".../100px180/" alt="Card
                        image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php the_permalink();?>">
                                </a>
                                <?php the_title(); ?>
                            </h5>
                                <p class="card-text">
                                    <?php the_content(
                                    'Продолжить...');
                                    /*the_excerpt();*/
                                    ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="btn
                                    btn-primary">Go somewhere
                                </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else: ?>
                <!-- no post found -->
                <p>Постов нет...</p>
            <?php endif; ?>
        </div>
    </div>





</body>

<?php get_footer(); ?>
