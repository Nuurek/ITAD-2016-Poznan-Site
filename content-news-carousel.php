<div id="news-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'News',
        'orderby' => 'date',
        'order' => 'ASC',
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
    ?>

    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < $post_query->found_posts; $i++) { ?>
            <li data-target="#news-carousel" data-slide-to="
            <?php
            echo $i;
            if ($i == 0) {
                echo '" class="active';
            }
            ?>
            "></li>
        <?php } ?>
    </ol>

    <div class="carousel-inner" role="listbox">
        <?php
        $count = 0;
        while($post_query->have_posts() ) {
            $post_query->the_post();
        ?>
            <div class="item
            <?php
            if ($count == 0) {
                echo ' active';
            }
            ++$count;
            ?>
            ">
                <div class="view hm-black-light">
                    <img class="img-fluid"
                    <?php
                    $images = get_attached_media( 'image' );
                    foreach($images as $image) {
                        ?>
                        src="<?php echo($image->guid); ?>"
                        alt="<?php echo(get_post_meta( $image->ID, '_wp_attachment_image_alt', true ))?>"
                        <?php break; } ?>
                    >
                    <div class="full-bg-img">
                    </div>
                </div>

                <div class="carousel-caption">
                    <div class="animated fadeInDown">
                        <h3 class="h3-responsive"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>

    <?php } ?>
</div>
