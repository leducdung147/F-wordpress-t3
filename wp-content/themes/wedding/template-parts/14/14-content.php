
    <div class="card">
        <img class="card-img-top" src="<?php the_post_thumbnail_url('largest');?>" alt="">
        <div class="card-body p-4">
        
        <span class="tag"> <?php $post_tags = get_the_tags();
                    if ( $post_tags ) {
                     echo $post_tags[0]->name; 
                } ?></span>
            <h3 class="card-title font-weight-normal mt-3">    <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
           <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>

            <p class="card-text pt-1"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 200, '...');?></p>
            <a href="<?php the_permalink() ?>" class="readmore p-2 text-white">Read more </a>
        </div>
    </div>

 

