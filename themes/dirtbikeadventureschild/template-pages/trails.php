<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Trails
 *
 * @package Portfolio
 */

get_header();
?>

<div class="trails-hero-section">
    <div class="row wrapper">
        <div class="column">
            <div class="hero-text-con">
                <h1>Trails</h1>
            </div>
        </div>
    </div>
</div>

<div class="trail-section">
    <div class="row wrapper ">

        <?php

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $data= new WP_Query(array(
            'post_type'=>'post', // your post type name
            'posts_per_page' => 4, // post per page
            'post_status' => 'publish',
            'paged' => $paged,
        ));


        if($data->have_posts()) :
            while($data->have_posts())  : $data->the_post();
                ?>

                <div class="post-con">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <div class="entry-meta">
                        <?php
                        dirtbikeadventures_posted_on();
                        dirtbikeadventures_posted_by();
                        ?>
                    </div><!-- .entry-meta -->

                    <?php the_excerpt(); ?>
                    <div class="post-btn">
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>


                <?php
                
                    endwhile;

                ?>    

    </div>
</div>

<div class="row wrapper">
    <div class="pagination">
        <?php

            $total_pages = $data->max_num_pages;

            if ($total_pages > 1){

                $current_page = max(1, get_query_var('paged'));

                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => '/page/%#%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text'    => __('« prev'),
                    'next_text'    => __('next »'),
                ));
            }
        ?>

    </div>
</div>

            <?php else :?>
            <h3><?php _e('404 Error&#58; Not Found', ''); ?></h3>
            <?php endif; ?>
            <?php wp_reset_postdata();?>

<?php
get_footer();