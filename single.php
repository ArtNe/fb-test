<?php

echo 'Hello, single!'; ?>

<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <!-- post -->
                <div class="col-md-12">
                    <div class="card">
                        <img class="card-img-top" src=".../100px180/" alt="Card
                        image cap">
                        <div class="card-body">
                            <h1 class="card-title">
                                <?php the_title(); ?>
                            </h1>
                            <p class="card-text">
                                <?php the_content(
                                    'Продолжить...');
                                /*the_excerpt();*/
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>

<?php get_footer(); ?>

