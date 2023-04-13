<?php
//Template Name: Home
?>


<?php get_header() ?>


<section class="banner text--center">
                <div class="container">
                    <div class="banner__wrapper">
                        <div class="banner__intro text--light">
                            <h1 class="mb--3"><?php echo get_field('banner_tagline');?></h1>
                            <p class="mb--5 text--light"><?php echo get_field('banner_desc');?></p>
                            <ul>
                                <li><a class="btn bg--primary br--25" href="#">Get Qoute Now</a></li>
                                <li><a class="btn bg--primary br--25 bg--transparent" href="#">Learn More</a></li>
                            </ul>
                        </div>
                        <div class="banner__appointment bg--light">
                            <h3 class="text--secondary text--center mb--3">Book Appointment</h3>
                            <form action="">
                                <label for="Name">Name</label> <br>
                                <input type="text" name="" id="" placeholder="Full Name"> <br>
        
                                <label for="Email">Email Address</label> <br>
                                <input type="email" name="" id="" placeholder="example@gmail.com"> <br>
        
                                <label for="Email">Department</label> <br>
                                <select>
                                    <option value="">Please Select</option>
                                    <option value="">Department 1</option>
                                    <option value="">Department 2</option>
                                    <option value="">Department 3</option>
                                    <option value="">Department 4</option>
                                    <option value="">Department 5</option>
                                </select> <br>
        
                                <label for="Email">Time</label> <br>
                                <input type="text" name="" id="" placeholder=""> <br>
        
                                <input type="submit" class="btn bg--primary bd--none" value="Book Appointment">
                            </form>
                        </div>
                    </div>
                    
                </div>
            </section>

        </div>

        <section class="leadingMed text--center py--10">
            <div class="container">
                <h2 class="text--secondary"><?php echo get_field('lm_title');?></h2>
                <p class="mb--5">
                    <?php echo get_field('lm_desc');?>
                </p>
                <div class="leadingMed__wrapper">
                    <div class="leadingMed__items">
                        <div class="leadingMed__title d--flex align--center">

                            <?php 
                            $image = get_field('img_icon');
                            if(!empty($image)):
                                ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php endif; ?>



                            <h4><?php echo get_field('lm_case');?></h4>
                        </div>
                        <div class="leadingMed__scope">
                        <?php if(get_field('lm_list')) : while(the_repeater_field('lm_list')): ?>
                            <ul>
                                <li><?php echo get_sub_field('list');?></li>
                            </ul>

                            <?php
                                endwhile;
                                else:
                                    echo "no list available";
                                endif;
                                    wp_reset_postdata();
                            ?>    
                        </div>
                    </div>
                    <div class="leadingMed__items">
                        <div class="leadingMed__title d--flex align--center">
                            <!-- <img src="<?php echo get_template_directory_uri() ?>./img/icn-circle circle-md.png" alt=""> -->

                            <?php 
                            $image = get_field('img_icon2');
                            if(!empty($image)):
                                ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php endif; ?>


                            <h4><?php echo get_field('lm_case2');?></h4>
                        </div>
                        <div class="leadingMed__scope">
                        <?php if(get_field('lm_list2')) : while(the_repeater_field('lm_list2')): ?>

                            <ul>
                                <li><?php echo get_sub_field('list2');?></li>
                            </ul>

                            <?php
                                endwhile;
                                else:
                                    echo "no list available";
                                endif;
                                    wp_reset_postdata();
                            ?> 
                        </div>
                    </div>
                    <div class="leadingMed__items">
                        <div class="leadingMed__title d--flex align--center">

                            <?php 
                            $image = get_field('img_icon3');
                            if(!empty($image)):
                                ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php endif; ?>

                            <h4><?php echo get_field('lm_case3');?></h4>
                        </div>
                        <div class="leadingMed__scope">
                        <?php if(get_field('lm_list3')) : while(the_repeater_field('lm_list3')): ?>

                            <ul>
                                <li><?php echo get_sub_field('list3');?></li>
                            </ul>
                        
                            <?php
                                endwhile;
                                else:
                                    echo "no list available";
                                endif;
                                    wp_reset_postdata();
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary"><?php echo get_field('testimonial_title');?></h2>
                <p class="mb--5">
                    <?php echo get_field('testimonial_desc');?>
                </p>
                <div class="testimonials__wrapper">

                <?php if(get_field('testimonials')) : while(the_repeater_field('testimonials')): ?>
                    <div class="testimonials__items text--left bg--light">
                        <ul class="stars d--flex mb--2">
                            <li><?php echo get_sub_field('star');?></li>
                        </ul>
                        <p class="mb--3">
                            <?php echo get_sub_field('saying');?>
                        </p>
                    

                        <?php 
                            $image = get_sub_field('person');
                            if(!empty($image)):
                                ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php endif; ?>
                    </div>

                    <?php
                        endwhile;
                        else:
                            echo "no reviews";
                        endif;
                            wp_reset_postdata();
                    ?> 
                </div>
            </div>
        </section>

        <section class="faq text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary"><?php echo get_field('faq_title');?></h2>
                <p class="mb--5">
                    <?php echo get_field('faq_desc');?>
                </p>




                <div class="faq__wrapper">
                <?php if(get_field('faqs')) : while(the_repeater_field('faqs')): ?>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri() ?>./img/arrow-right.png" alt=""></li>
                            <li>
                                <h4 class="text--secondary"><?php echo get_sub_field('question');?></h4>
                                <p><?php echo get_sub_field('answer');?></p>
                            </li>
                        </ul>
                </div>

                <?php
                    endwhile;
                    else:
                        echo "no reviews";
                    endif;
                        wp_reset_postdata();
                ?>     
                </div>
            </div>

        </section>

        <section class="pricing text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary"><?php echo get_field('pricing_title');?></h2>
                <p class="t--bold mb--5">
                    <?php echo get_field('pricing_desc');?>
                </p>
            
                <div class="pricing__wrapper">
                            <?php
                                $args = array(
                                    'post_type' => 'blogPost',
                                    'posts_per_page' => 1,
                                    'offset' => 2,
                                    
                                );

                                $newQuery = new WP_Query($args);
                            ?>

                            <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                    <div class="pricing__items p--3 my--3 bg--light">
                        <h3 class="text--secondary mb--3"><?php the_title();?></h3>
                        <p class="t--bold mb--2"><b><?php the_excerpt();?></b></p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4><?php echo get_field('price');?></h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small>$</small></p>
                                <p><small>Per Month</small></p>
                            </li>
                        </ul>
                        <ul class="includes mb--3">

                        <?php if(get_field('package_list')) : while(the_repeater_field('package_list')): ?>
                            <li>
                                <?php 
                                $image = get_sub_field('check');
                                if(!empty($image)):
                                    ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    <?php endif; ?>
                                    <p class="text--secondary"><?php echo get_sub_field('feature');?></p>
                            </li>

                            <?php
                                endwhile;
                                else:
                                    echo "no reviews";
                                endif;
                                    wp_reset_postdata();
                            ?> 

                        </ul>
                        <a href="<?php echo get_permalink();?>" class="btn bg--primary">Try for free</a>
                    </div>

                    <?php
                        endwhile;
                        else:
                                    echo "no available post yet";
                        endif;
                                    wp_reset_postdata();
                    ?>



                    <?php
                        $args = array(
                            'post_type' => 'blogPost',
                            'posts_per_page' => 1,
                            'offset' => 1,
                            
                        );

                        $newQuery = new WP_Query($args);
                    ?>

                    <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                    <div class="pricing__items p--3 my--3 bg--secondary">
                        <h3 class="text--secondary mb--3"><?php the_title();?></h3>
                        <p class="t--bold mb--2"><b><?php the_excerpt();?></b></p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4><?php echo get_field('price');?></h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small>$</small></p>
                                <p><small>Per Month</small></p>
                            </li>
                        </ul>
                        <ul class="includes mb--3">
                             <?php if(get_field('package_list')) : while(the_repeater_field('package_list')): ?>
                            <li>
                            <?php 
                            $image = get_sub_field('check');
                            if(!empty($image)):
                                ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php endif; ?>
                                <p class="text--secondary"><?php echo get_sub_field('feature');?></p>
                            </li>
                            <?php
                                endwhile;
                                else:
                                    echo "no reviews";
                                endif;
                                ?>
                                
                            

                        </ul>
                        <a href="<?php echo get_permalink();?>" class="btn bg--primary">Try for free</a>
                    </div>


                    <?php
                        endwhile;
                        else:
                                    echo "no available post yet";
                        endif;
                                    wp_reset_postdata();
                    ?>


                    <?php
                        $args = array(
                            'post_type' => 'blogPost',
                            'posts_per_page' => 1,
                            

                            
                        );

                        $newQuery = new WP_Query($args);
                    ?>

                    <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                    <div class="pricing__items p--3 my--3 bg--light">
                        <h3 class="text--secondary mb--3"><?php the_title();?></h3>
                        <p class="t--bold mb--2"><b><?php the_excerpt();?></b></p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4><?php echo get_field('price');?></h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small>$</small></p>
                                <p><small>Per Month</small></p>
                            </li>
                        </ul>
                        <ul class="includes mb--3">
                        <?php if(get_field('package_list')) : while(the_repeater_field('package_list')): ?>
                            <li>
                            <?php 
                            $image = get_sub_field('check');
                            if(!empty($image)):
                                ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php endif; ?>
                                <p class="text--secondary"><?php echo get_sub_field('feature');?></p>
                            </li>

                            <?php
                                endwhile;
                                else:
                                    echo "no reviews";
                                endif;
                                ?>
                        </ul>
                        <a href="<?php echo get_permalink();?>" class="btn bg--primary">Try for free</a>
                    </div>

                    <?php
                        endwhile;
                        else:
                                    echo "no available post yet";
                        endif;
                                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>

        <div class="subscribe text--center py--10 bg--secondary text--light">
            <div class="container">
                <div class="subscribe__wrapper">
                    <div class="subscribe__intro mb--2">
                        <h2>Get In Touch</h2>
                        <p class="text--light">
                            <small>
                                The gradual accumulation of information about atomic and 
                                small-scale behaviour during the first quarter of the 20th 
                            </small>
                        </p>
                    </div>
                    <div class="groupInput">
                        <input type="text" name="" id="" placeholder="Your Email">
                        <input type="button" value="Subscribe">
                    </div>
                </div>
            </div>
        </div>

<?php get_footer() ?>