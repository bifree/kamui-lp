<?php the_field('thumbnail'.$i); ?>

<section class="price">
				<div class="price__pc">
					<img class="price__pc1" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc1.png">

					<img class="price__pc2"  src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc2.png">


					<div class="price__top__pc">
						<img class="price__pc3" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc3.png">
					</div>

					<p class="price__limited"><span class="price__limited__square">当月限定</span><span class="price__limited__number"> <?php the_field('deadline-month'); ?> </span>月<span class="price__limited__number"> <?php the_field('deadline-date'); ?> </span>日（<?php the_field('which-day'); ?>）まで<br>1ヶ月先着<span class="price__limited__number"> <?php the_field('first-served-people-amount'); ?> </span>名様限定</p>
					<img class="price__pc8" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc8.png"> 		
					
					<div class="price__people">
						<p class="price__people__text">残り <span class="price__people__number"> <?php the_field('limited-people-amount'); ?> </span> 名様のみ</p>
					</div>
					<img class="price__pc10" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc10.png">
					<p class="price__text">
						先着すぎたら？…知りません!!<br>
						痛みがない生活を送りたい方は今すぐお電話!
					</p>
					<p class="price__text__square">
						ココで悩み続けた「膝痛」を<br>
						最後にしたいと思われるのでしたら<br>
						ぜひお電話下さい!
					</p>
					<img class="price__pc11" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc11.png">
					<a onclick="return gtag_report_conversion('tel:800-123-4567');" class="price__tel__pc" href="tel:09046073624">
						<img class="price__pc4" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc4.png">
					</a>
					<img class="price__pc5" 
					src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc5.png">
					
					<img class="price__pc6" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc6.png">
					
					<a class="price__mail__pc" href="<?php echo home_url('/contact'); ?>">
						<img class="price__pc7" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-pc7.png">
					</a>
				</div>

				<div class="price__sp">
					<img class="price__sp1" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp1.png">

					<img class="price__sp2"  src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp2.png">


					<div class="price__top__sp">
						<img class="price__sp3" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp3.png">
					</div>

					<p class="price__limited">
					<span class="price__limited__square">当月限定</span> 
					<span class="price__limited__number"> <?php the_field('deadline-month'); ?></span> 月 <span class="price__limited__number"><?php the_field('deadline-date'); ?></span> 日(<?php the_field('which-day'); ?>)</span>まで<br>1ヶ月先着 <span class="price__limited__number"><?php the_field('first-served-people-amount'); ?></span> 名様限定</p>
					<img class="price__sp9" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp9.png"> 		
					
					<div class="price__people">
						<p class="price__people__text">残り <span class="price__people__number"><?php the_field('limited-people-amount'); ?></span> 名様のみ</p>
					</div>
					<img class="price__sp11" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp11.png">
					<img class="price__sp14" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp14.png">
					<img class="price__sp15" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp15.png">
				
			
	
					<img class="price__sp12" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp12.png">
					<a onclick="return gtag_report_conversion('tel:800-123-4567');" class="price__tel__sp" href="tel:09046073624">
						<img class="price__sp4" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp4.png">
					</a>
					<img class="price__sp5" 
					src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp5.png">
					<img class="price__sp6" 
					src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp6.png">
					
					<img class="price__sp7" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp7.png">
					
					<a class="price__mail__sp" href="<?php echo home_url('/contact'); ?>">
						<img class="price__sp8" src="<?php echo get_template_directory_uri(); ?>/assets/img/price-sp8.png">
					</a>
				</div>
			</section>