<?php

/*

Template Name:Reach Us

*/

get_header();

?>
<div id="primary" class="content-wrapper row padding--152">
	
	<div id="main" class="container" role="main">
		<div class="row">
			<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3887.1084225689765!2d80.206206!3d13.028767000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52672163652ddd%3A0x13b8b036c100c6b9!2sMyCopie!5e0!3m2!1sen!2s!4v1407235904881" width="100%" height="450" frameborder="0" style="border:0"></iframe>
			</div>

			<div class="col-md-12">
				<div class="divider"></div>	
			</div>

			<div class="col-md-6 text-center">
				<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-blue" style="">
						<a href="#"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-phone"></i>
						</a>
				</div>
				<p>+91 44 4287 9200</p>
			</div>
			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-salem" style="">
						<a href="#"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool2" target="_blank">
							<i class="fa fa-3x fa-whatsapp"></i>
						</a>
				</div>
				<p>+91 91768 08449</p>
			</div>

			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-flam" style="">
						<a href="mailto:jobless@mycopie.com"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-envelope"></i>
						</a>
				</div>
				<p>jobless@mycopie.com</p>
			</div>

			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-blue" style="background-color: #4A6EA9;">
						<a href="https://www.facebook.com/mycopiepage"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-facebook"></i>
						</a>
				</div>
				<p>/MyCopiePage</p>
			</div>
			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-madison" style="background-color: #55acee">
						<a href="https://www.twitter.com/mycopiepage"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool2" target="_blank">
							<i class="fa fa-3x fa-twitter"></i>
						</a>
				</div>
				<p>@MyCopiePage</p>
			</div>
			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-flam" style="">
						<a href="https://www.youtube.com/channel/UCie_dcGZT-U52rEluYNm6kA"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-youtube"></i>
						</a>
				</div>
				<p>/mycopievideos</p>
			</div>
			
			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-blue" style="background-color: #0077b5;">
						<a href="https://www.linkedin.com/company/2837559?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A1-1-1%2CtarId%3A1432180326059%2Ctas%3Amycopie"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-linkedin"></i>
						</a>
				</div>
				<p>/mycopie</p>
			</div>


			<div class="col-md-6 txt-center">
				<div id="heroIcon" class="cu-flam" style="">
						<a href="https://plus.google.com/112812126144713534531"  data-toggle="tooltip" data-placement="top" title="MyCopie" id="tool" target="_blank">
							<i class="fa fa-3x fa-google"></i>
						</a>
				</div>
				<p>/mycopie</p>
			</div>		
			</div>

			<div class="col-md-6">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>	

		</div>	
	</div>

</div>

<?php get_footer(); ?>
