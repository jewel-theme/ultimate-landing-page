<!DOCTYPE html>
<html>
	<head>


		<title><?php echo the_title(); ?></title>
<!-- -------------------- Landing Page SEO  -------------------- -->
		<meta property="og:title" content="<?php echo get_post_meta($post->ID,'lpp_seo_title',true); ?>">

		<meta property="og:url" content="<?php $url = site_url(); echo $url; ?>">
		
		<meta property="og:description" name="description" content='<?php echo get_post_meta($post->ID,'lpp_seo_meta_description',true); ?>'>

		<meta name="keywords" content="<?php echo get_post_meta($post->ID,'lpp_seo_keywords',true); ?>">




				
				<script type="text/javascript">

						<?php echo get_post_meta($post->ID,'lpp_custom_js',true); ?>

				</script>




		
		<style type="text/css">

		*, *:before, *:after {
  		-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
 		}
		body{
			width: 100%;
			height: 100%;
			display: inline-block;
			margin: 0px;
		}

		@media screen and (min-width: 680px) {
		.lpp_section{
			width: 100%;
			text-align: center;
			display: inline-block;

		}
		.lpp_h1{
			 font-size: 34px;
			 font-size: 2rem;
			 font-family: 'museo-slab', sans-serif;
			 color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;

		}
		.lpp_h2{
			 font-size: 22px;
			 font-size: 1.4rem;
			 font-family: 'museo-slab', sans-serif;
			 color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_h3{
			 font-size: 20px;
			 font-size: 1.2rem;
			 font-family: 'museo-slab', sans-serif;
			 color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_p{
			 font-size: 16px;
			 line-height: 1.2;
			 font-size: 1.1rem;
			 font-family: 'museo-slab', sans-serif;
			 color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_cta{
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
			background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
		}
		.lpp_benefit{
			width: 29%;
			float: left;
			margin: 3% 2% 0 2%;
		}

		#lpp_section_1,body,html{
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;
		}
		#lpp_section_2{
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
		}
		#lpp_testimonial_text{
			font-size:21px;
		}

		#lpp_feature_list{
			float: left;
		}
		#lpp_sub_sect_left{
			width: 50%;
			height: 70%;
			float: left;
			margin-top: 5%;
			text-align: center;
			margin-left: 1%;

		}
		#lpp_sub_sect_right{
			width: 47%;
			height: 70%;
			margin-top: 5%;
			float: right;
		}
		#lpp_main_content{
			margin: 5% 2% 5% 2%;

		}
		#lpp_feature_list{
			margin-left:3%;
		}
		#lpp_main_cta{
			border: none;
			height: 10%;
			width:60%;
			font-size: 29px;
		}

		#lpp_testimonial{
			width: 100%;
			height: 20%;


		}
		

		#lpp_footer{
			width: 100%;
		}
		#lpp_cta_bottom{
			width: 100%;
			height: 8%;
			border: none;
			font-size: 46px;
		}
		#main_feature_img{
			width: 100%;
			height: 50%;
		}



	}





	@media screen and (max-width: 680px) {
		.lpp_section{
			width: 100%;
			text-align: center;
			display: inline-block;
		}
		.lpp_h1{
			 font-size: 34px;
			 font-size: 2rem;
			 font-family: 'museo-slab', sans-serif;
			 color: <?php echo get_post_meta($post->ID,'lpp_h1_c',true); ?>;

		}
		.lpp_h2{
			 font-size: 22px;
			 font-size: 1.4rem;
			 font-family: 'museo-slab', sans-serif;
			 color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_h3{
			 font-size: 20px;
			 font-size: 1.2rem;
			 font-family: 'museo-slab', sans-serif;
			 color: <?php echo get_post_meta($post->ID,'lpp_h2_c',true); ?>;
		}
		.lpp_p{
			 font-size: 16px;
			 line-height: 1.2;
			 font-size: 1.1rem;
			 font-family: 'museo-slab', sans-serif;
			 color: <?php echo get_post_meta($post->ID,'lpp_content_c',true); ?>;
		}
		.lpp_cta{
			color: <?php echo get_post_meta($post->ID,'lpp_cta_c',true); ?>;
			background: <?php echo get_post_meta($post->ID,'lpp_cta_bg',true); ?>;
		}
		.lpp_benefit{
			width:100%;
			float: left;
		}

		#lpp_section_1,body,html{
			background: <?php echo get_post_meta($post->ID,'lpp_content_bg',true); ?>;

		}

		#lpp_section_2{
			background: <?php echo get_post_meta($post->ID,'lpp_testimonial_bg',true); ?>;
		}

		
		#lpp_sub_sect_left{
			width: 90%;
			height: 50%;
			margin-top: 5%;
			text-align: center;

		}
		#lpp_sub_sect_right{
			width:100%;
			height: 50%;
			margin-top: 1%;
			margin-left: 5%;
		}
		
		
		#lpp_main_cta{
			border: none;
			height: 10%;
			width:60%;
			font-size: 20px;
		}

		#lpp_testimonial{
			width: 100%;
			height: 20%;

		}
		

		#lpp_footer{
			width: 100%;
		}
		#lpp_cta_bottom{
			width: 100%;
			height: 8%;
			border: none;
			font-size: 46px;
		}
		#main_feature_img{
			width: 100%;
			height:50%;
			margin-left: 5.5%;
		}



	}






		@media screen and (max-width: 480px) {

		  .lpp_h1{
		  font-size: 24px;  
		  font-size: 1.5rem; 
		  font-family: 'museo-slab', sans-serif;

		}
		.lpp_h2{
		  font-size: 22px; 
		  font-size: 1.1rem;
		  font-family: 'museo-slab', sans-serif;

		}
		.lpp_h3{
		  font-size: 22px; 
		  font-size: 1rem;
		  font-family: 'museo-slab', sans-serif;

		}

		.lpp_p{
		  line-height: 1.5; 
		  font-size: 0.9rem; 
		  font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;

		}



		}

		<?php echo get_post_meta($post->ID,'lpp_custom_styling',true); ?>






		</style>
	</head>
	<body>
		<div id='lpp_section_1' class='lpp_section'>
			<h1 id='lpp_primary_h1' class='lpp_h1'>
				<?php echo  get_post_meta( $post->ID , 'lpp_main_h1' , true ); ?>
			</h1>
			<h2 id='lpp_sub_h2' class='lpp_h2 lpp_sub_h2'>
				<?php echo  get_post_meta( $post->ID , 'lpp_sub_h2' , true ); ?>
			</h2>
			<div id='lpp_sub_sect_left' class=''>
				<!----
				<img src="" id='main_feature_img'
				style='width:100%; height:60%;'> >    
				!--> 
				<embed src="<?php echo get_post_meta($post->ID,'lpp_add_img_1',true); ?>" style='' id='main_feature_img'>
			</div>
			<div id='lpp_sub_sect_right'>
				<p id='lpp_main_content' class='lpp_p'>
					<?php echo  get_post_meta( $post->ID , 'lpp_main_content' , true ); ?>
				</p>
				<ul id='lpp_feature_list' class='lpp_p'>
					<li><?php echo  get_post_meta( $post->ID , 'lpp_feature_1' , true ); ?></li>
					<li><?php echo  get_post_meta( $post->ID , 'lpp_feature_2' , true ); ?></li>
					<li><?php echo  get_post_meta( $post->ID , 'lpp_feature_3' , true ); ?></li>
					<br><br>
					
				</ul>

				<a href='<?php echo  get_post_meta( $post->ID , 'lpp_cta_url' , true ); ?>'>
				<button id='lpp_main_cta' class='lpp_cta'>
					<?php echo  get_post_meta( $post->ID , 'lpp_main_cta' , true ); ?>
				</button>
				</a>
				
			</div>
		</div>
		<div id='lpp_section_2' class='lpp_section'>
			<div id='lpp_testimonial'>
				<p id='lpp_testimonial_text' class='lpp_p'>
					<?php echo  get_post_meta( $post->ID , 'lpp_testimonial_left_content' , true ); ?>
				</p>
				<p style="font-size:14px;margin-left:10%;" id='lpp_testimonial_author' class='lpp_p'>
               <?php echo  get_post_meta( $post->ID , 'lpp_testimonial_left_content_author' , true ); ?>
             </p>

			</div>
			<div id='lpp_benefit_1' class='lpp_benefit'>
				<h3 class='lpp_h3' id='lpp_benefit_h3'>
					<?php echo  get_post_meta( $post->ID , 'lpp_benefit_1_content_title' , true ); ?>
				</h3>
				<p class='lpp_p' id='lpp_benefit_p'>
					<?php echo  get_post_meta( $post->ID , 'lpp_benefit_1_content' , true ); ?>
				</p>
			</div>
			<div id='lpp_benefit_2' class='lpp_benefit'>
				<h3 class='lpp_h3' id='lpp_benefit_h3'>
					<?php echo  get_post_meta( $post->ID , 'lpp_benefit_2_content_title' , true ); ?>
				</h3>
				<p class='lpp_p' id='lpp_benefit_p'>
					<?php echo  get_post_meta( $post->ID , 'lpp_benefit_2_content' , true ); ?>
				</p>
			</div>
			<div id='lpp_benefit_3' class='lpp_benefit'>
				<h3 class='lpp_h3' id='lpp_benefit_h3'>
					<?php echo  get_post_meta( $post->ID , 'lpp_benefit_3_content_title' , true ); ?>
				</h3>
				<p class='lpp_p' id='lpp_benefit_p'>
					<?php echo  get_post_meta( $post->ID , 'lpp_benefit_3_content' , true ); ?>
				</p>
			</div>
			<div id='lpp_footer' class='lpp_footer'>
				<h1 id='lpp_f_h1' class='lpp_h1'>
					<?php echo  get_post_meta( $post->ID , 'lpp_final_sub_h2' , true ); ?>
				</h1>
				<a href="<?php echo  get_post_meta( $post->ID , 'lpp_cta_url' , true ); ?> "><button id='lpp_cta_bottom' class='lpp_cta'><?php echo  get_post_meta( $post->ID , 'lpp_main_cta' , true ); ?></button></a>

			</div>
		</div>
	</body>
</html>