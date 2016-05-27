<?php require_once(drupal_get_path('theme','hhs').'/tpl/header.tpl.php'); ?>

<!-- -->
	<div id="hhs-jumbotron">
		<!-- .container -->
		<div class="container-fluid">
			<!-- -->
			<div class="row">
				<!-- -->
				<?php print render($page['jumbotron']); ?>
			</div>
			<!--/ -->
		</div>
		<!--/ .container -->
	</div>
	<!--/ -->

	<!-- -->
	<?php /*?><div class="hhs-breadcrumbs">
		<!-- .container -->
		<div class="container"> 
			<!-- .row -->
			<div class="row">
				<!-- .col-md-12 -->
				<div class="col-md-12">
					<?php if ($breadcrumb): print $breadcrumb; endif; ?>
				</div>
				<!--/ .col-md-12 -->
			</div>
			<!--/ -->
		</div>
		<!--/ .container -->
	</div><?php */?>
	<!--/ -->
	
	<!-- -->
	<div id="hhs-main">
		<!-- .container -->
		<div class="container"> 
			<!-- .row -->
			<div class="row">
				<!-- .col-md-12 -->
				<div class="col-md-12">
				<?php print $messages; ?>
				</div>
			
				<!-- -->
				<?php if ( ($page['sidebar_first']) ) : ?>
					<div class="<?php if ($page['sidebar_second']) { echo "col-md-3";} else { echo "col-md-3"; } ?>">
						<div id="sticky-sidebar"> <?php print render($page['sidebar_first']); ?> </div>
					</div>
				<?php endif; ?>
					<!-- -->
					<div class="<?php if ( ($page['sidebar_second']) AND ($page['sidebar_first']) ) { echo "col-md-6";} elseif ( ($page['sidebar_second']) OR ($page['sidebar_first']) ) {  echo "col-md-9"; }  else { echo "col-md-12"; } ?>">
				<!-- -->
				<?php if ($tabs = render($tabs)): ?>
					<div id="drupal_tabs" class="tabs ">
						<?php print render($tabs); ?>
					</div>
				<?php endif; ?>
				<!--/ -->
				
				<?php print render($page['help']); ?>
				
				<!-- -->
				<?php if ($action_links): ?>
				<ul class="action-links">
					<?php print render($action_links); ?>
				</ul>
				<?php endif; ?>
				<!--/ -->
				
				
				<!--/ content -->
				
				<?php if ( ($page['sidebar_second']) ) : ?>
				<div class="<?php if ($page['sidebar_first']) { echo "col-md-3";} else { echo "col-md-3"; } ?>"> <?php print render($page['sidebar_second']); ?> </div>
				<?php endif; ?>
				<!--/ -->
				<p>&nbsp;<!-- --></p>
			</div>
			<!--/ .row-->
		</div>
		<!--/ .container-->
	</div>
	<!--/ .hhs-main -->
	
	<!-- .hhs-secondary -->
	<div class="hhs-secondary">
		<!-- .container -->
		<div class="container">
			<!--.row -->
			<div class="row">
				<!-- .col-md-12 -->
				<div class="col-md-12">
					<!-- !Secondary Content Region --> 
					<?php print render($page['secondary_content']); ?> 
				</div>
				<!--/ -->
			</div>
			<!--/ -->
		</div>
		<!--/ -->
	</div>
	<!--/ -->
	
	<div class="hhs-tertiary">
		<!-- .container -->
		<div class="container">
			<!--.row -->
			<div class="row">
				<!-- !Tertiary Content Region --> 
				<?php print render($page['tertiary_content']); ?>
			</div>
			<!--/ .row -->
		</div>	
		<!--/ .container --> 
	</div>
	<!--/ .hhs-tertiary -->
	
	<!--- *** start hp_chevron ** -->
	<?php if ($page['hp_chevron']): ?>
	<!-- .hhs-hp-chevron -->
	<div class="hhs-hp-chevron">
		<!-- .container-fluid -->
		<div class="container-fluid">
			<!-- .row -->
			<div class="row">
				<!-- .container -->
				<div class="col-md-12">
					<!-- .hp-chevron-inner -->
					<div class="hp-chevron-inner">
						<?php print render($page['hp_chevron']); ?>
					</div>
					<!--/ .hp-chevron-inner -->
				</div>
				<!--/ .col-md-12 -->
			</div>
			<!--/ .row -->
		</div>
		<!--/ .container-fluid -->
	</div>
	<!-- .hhs-hp-chevron -->
	<?php endif; ?>
	
	<!-- new carousel slider -->
	<?php if ($page['content_bottom']): ?>
	<!-- .hhs-content-bottom -->
	<div class="hhs-content-bottom"> 
		<!-- .container -->
		<div class="container">
			<!-- .row -->
			<div class="row">
				<!-- .col-md-12 -->
				<div class="col-md-12">
					<?php print render($page['content_bottom']); ?>
				</div>
				<!--/.col-md-12 -->
			</div>
			<!--/ .row -->
		</div>
		<!--/ -->
	</div>
	<!--/ -->
	<?php endif; ?>
	
	<!--- *** start inset *** -->
	<?php if ($page['inset']): ?>
	<!-- .content-second .row-->
	<div id="inset">
		<!-- .container -->
		<div class="container">
			<div class="row">
				<div class="col-md-12"><?php print render($page['inset']); ?></div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<!--/ .container --> 
</div>	
<!--/ PAGE WRAP -->
</div>

<?php require_once(drupal_get_path('theme','hhs').'/tpl/footer.tpl.php');?>