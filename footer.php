<?php wp_footer() ?>


<footer class="getInTouch py--10">
            <div class="container">
                <div class="getInTouch__wrapper">
                    <ul>
                        <li>Get In Touch</li>
                        <li>
                            the quick fox jumps over the 
                            lazy dog
                        </li>
                        <li>
                            <ul class="socLinks d--flex">
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                                <li><i class="fa-brands fa-twitter"></i></li>
                            </ul>
                        </li>
                    </ul>
                    <?php if(get_field('footer_categories')) : while(the_repeater_field('footer_categories')): ?>
                    <ul>
                        <?php if(get_sub_field('category_list')) : while(the_repeater_field('category_list')): ?>
                        <li><?php echo get_sub_field('category');?></li>
                        <?php
                                endwhile;
                                else:
                                    echo "no category list";
                                endif;
                                ?>
                    </ul>
                    <?php
                                endwhile;
                                else:
                                    echo "no reviews";
                                endif;
                                ?>
                </div>
            </div>
        </footer>
        <div class="allRightReserved py--3 bg--gray">
            <div class="container">
                <p class="text--center">Made With Love By Figmaland All Right Reserved</p>
            </div>
        </div>

        <script>
            
            const toogleMenu = document.querySelector('.toggle__menu');
            const nav = document.querySelector('.nav');
            const header = document.querySelector('.header');

            toogleMenu.addEventListener('click' , () =>{
                toogleMenu.classList.toggle('open');
                nav.classList.toggle("open");
                header.classList.toggle("open");
            });

        </script>

    </body>
</html>