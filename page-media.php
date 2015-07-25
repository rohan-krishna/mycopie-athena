<?php

/*

Template Name:Media

*/

get_header();

?>
<div id="primary" class="content-wrapper row padding--152">
	<div id="main" class="container" role="main">
		<div class="row">
			<div class="col-md-12">
				<?php
					$args = array('category_name' => 'print_press','post_type' => 'post');
					$print = new WP_Query( $args );
				?>
				<?php if ( $print->have_posts() ) : while ( $print->have_posts() ) : $print->the_post(); ?>
				<div class="col-md-4">
					<?php the_content(); ?>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>

			<div class="col-md-12">
				<div class="divider"></div>				
			</div>

			<div class="col-md-12">
				<center>
					<a href="javascript:;"  data-toggle="modal" data-target="#tv">
						<img src="http://mycopie.com/wp-content/uploads/2015/01/Puthiya-Thalaimurai-Tv-Online.png" style="padding-top: 10px;">
					</a>
				</center>
			</div>

			<div class="col-md-12">
				<div class="divider"></div>
			</div>

			<div class="col-md-12">
				<?php
					$args = array('category_name' => 'online_press','post_type' => 'post');
					$online = new WP_Query( $args );
				?>
				<?php if ( $online->have_posts() ) : while ( $online->have_posts() ) : $online->the_post(); ?>
					<div class="col-md-4">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>

			<div class="col-md-12">
				<div class="divider"></div>
			</div>

			<div class="col-md-12">
				<div class="col-md-5">
					<a target="_blank">
						<img class="alignnone wp-image-519 size-medium" src="http://upload.wikimedia.org/wikipedia/en/a/a7/Radiomirchi.jpg" alt="" width="auto" height="150px" />
					</a>
				</div>
			<div class="col-md-4">
				<a target="_blank" href="#" target="_blank">
					<img class="alignnone wp-image-519 size-medium" src="http://www.shaastra.org/2009/site/themes/prince_hari/images/chennai_live_logo.jpg" alt="" width="auto" height="150px" />
				</a>
			</div>
			<div class="col-md-3">
				<a target="_blank" href="https://soundcloud.com/krithikad/mycopie-radio-talk" target="_blank">
					<img class="alignnone wp-image-519 size-medium" src="http://www.thatericalper.com/wp-content/uploads/2015/07/soundcloud_logo-550.png" alt="" width="auto" height="150px" />
				</a>
			</div>
			
			</div>			

		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="tv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 95px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Puthiya Thalaimurau</h4>
      </div>
      <div class="modal-body">
        <iframe  src="//www.youtube.com/embed/XByqbpOJkz8" frameborder="0" allowfullscreen style="width: 100%; height: 350px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>