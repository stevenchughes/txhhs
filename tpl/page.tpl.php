<!-- start .page-wrap -->
<div class="page-wrap">
	<!-- .hhs-topnav -->
	<div id="hhs-topnav"> 
		<!-- .container -->
		<div class="container">
			<!-- -->
			<div class="row">
			<!-- if-Else-statement -->
			<?php if ($page['leaderboard'] || $page['top_right']): ?>
				<!-- .col-md-10 5TABS -->
				<div class="col-md-10">
					<?php print render($page['leaderboard']); ?>
				</div>
				<!--/ .col-md-10 5TABS -->

				<!-- .col-md-2 5TABS -->
				<div class="col-md-2 float-right">
					<?php print render($page['top_right']); ?>
				</div>
				<!--/ .col-md-2 5TABS -->
			<?php endif; ?>
			</div>
			<!--/ -->
		</div>
		<!--/ --> 
	</div>
	<!--/ .hhs-topnav -->
	
	<!--# -->
	<div id="hhs-header-wrap"> 
		<!-- .container -->
		<div class="container"> 
			<!-- -->
			<div class="row">
				<!-- -->
				<div class="col-md-4"> 
					<!-- -->
					<header class="hhs-brand">
					
					<!-- logo -->
					<?php if ($logo): ?>
					<a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      				<?php endif; ?>
                    	
					<!-- -->
					<?php if (!empty($site_name)): ?><a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
					<?php endif; ?>
					
					<!-- -->
					<?php if ($site_slogan): ?>
					<h2<?php print $site_slogan_attributes;?>>
					<?php print $site_slogan; ?></h2>
					<?php endif; ?>
					<!--/ site slogan -->
                    
                    	<!-- !Header Region --> 
                    	<?php print render($page['header']); ?>
                    	<!--/ end Header Region -->
				</header>
					<!--/ -->
				</div>
				<!--/ -->
				<!-- .col-xs-8 -->
				<div class="col-md-8">
					<!-- -->
					<div class="a2z-styles">
						<div class="float-right">
						<?php print render($page['menu_a2z']); ?>
						</div>
					</div>
					<!--/ -->
					<!-- -->
					<div class="hhs-search">
						<div class="float-right">
						<?php print render($page['search']); ?>
						</div>
					</div>
					<!--/ -->
				</div>
				<!--/ -->
			</div>
			<!--/ .row --> 
		</div>
		<!--/ .container --> 
	</div>
	<!--/ -->
	
	<!-- #rb-mm-wrap -->
	<div id="hhs-pers-nav">
		<!-- .container -->
		<div class="container">
			<!-- .row -->
			<div class="row">
				<!-- -->
				<div class="col-md-12">
				<!-- !Navigation -->
				<?php print render($page['pers_nav']); ?>
				</div>
				<!--/ -->
			</div>

		</div>
		<!--/ .container -->
	</div>
	<!--/ #rb-mm-wrap -->
	
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
	
	
	<!-- HHS site content start //-->
	<!--<div class="hhs-content">-->

	<!-- Page Title start //-->
	<!-- section.hhs-page-title-1 -->
	<?php /*?><section class="hhs-page-title-1" data-stellar-background-ratio="0.5">
	
		<!-- .container -->
		<div class="container">
		
			<!-- .row -->
			<div class="row">
			
				<div class="col-lg-9 col-md-9 col-sm-9">
					<h1> <?php  print drupal_get_title(); ?></h1>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3">
					<?php  if($page['page_title_right']):?>
					<?php print render($page['page_title_right']) ?>
					<?php endif; ?>
				</div>
			</div>
			<!--/ .row -->
		</div>
		<!--/ .container -->
	</section><?php */?>
	<!--/ section.hhs-page-title-1 -->
	
	<!-- Desktop breadscrubs start //-->
	<!-- -->
	<div class="hhs-breadcrumbs">
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
	</div>
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
				
				<!-- -->
				<?php /*?><div style="height:20px;width:100%;clear:both;margin:0px">&nbsp;</div><?php */?>
				<!--/ -->
				
				<!-- PAGE TITLE -->
				<?php if ($title): ?>
					<h1 id="page-title"><?php print $title; ?></h1>
				<?php endif; ?>
				<!--/ PAGE TITLE -->
				
				<!-- content -->
				<?php if (isset($page['content'])) { print render($page['content']); } ?>
				<!--/ content -->
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



<!-- !Footer --> 
<?php require_once(drupal_get_path('theme','hhs').'/tpl/footer.tpl.php');?>