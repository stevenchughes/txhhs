<?php global $base_url; ?>
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
				<div class="col-md-10"> <?php print render($page['leaderboard']); ?> </div>
				<!--/ .col-md-10 5TABS --> 
				
				<!-- .col-md-2 5TABS -->
				<div class="col-md-2 float-right"> <?php print render($page['top_right']); ?> </div>
				<!--/ .col-md-2 5TABS -->
				
				<?php endif; ?>
			</div>
			<!--/ --> 
			
		</div>
		<!--/ .container --> 
	</div>
	<!--/ .hhs-topnav --> 
	<!--# hhs-header-wrap -->
	<div id="hhs-header-wrap"> 
		
		<!-- .container -->
		<div class="container"> 
			
			<!-- .row -->
			<div class="row"> 
				<!-- .col-md-4 -->
				<div class="col-md-4"> 
					<!-- -->
					<header class="hhs-brand"> 
						
						<!-- logo -->
						<?php if ($logo): ?>
						<a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
						<?php endif; ?>
						
						<!-- -->
						<?php if (!empty($site_name)): ?>
						<a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
						<?php endif; ?>
						
						<!-- -->
						<?php if ($site_slogan): ?>
						<h2<?php print $site_slogan_attributes;?>> <?php print $site_slogan; ?></h2>
						<?php endif; ?>
						<!--/ site slogan --> 
						
						<!-- !Header Region --> 
						<?php print render($page['header']); ?> 
						<!--/ end Header Region --> 
					</header>
					<!--/ --> 
				</div>
				<!--/ .col-md-4 --> 
				
				<!-- .col-xs-8 -->
				<div class="col-md-8"> 
					<!-- -->
					<div class="a2z-styles">
						<div class="float-right"> <?php print render($page['menu_a2z']); ?> </div>
					</div>
					<!--/ --> 
					<!-- -->
					<div class="hhs-search">
						<div class="float-right"> <?php print render($page['search']); ?> </div>
					</div>
					<!--/ --> 
				</div>
				<!--/ .col-xs-8 --> 
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
					<?php print render($page['pers_nav']); ?> </div>
				<!--/ --> 
			</div>
		</div>
		<!--/ .container --> 
	</div>
	<!--/ #rb-mm-wrap --> 
