<?php require_once(drupal_get_path('theme','hhs').'/tpl/header.tpl.php'); ?>
<?php
$tid = arg(2);
$term = taxonomy_term_load($tid);
$vid = $term->vid;
$vocab = taxonomy_vocabulary_load($vid);
$vocab_name = $vocab->name;
?>
<!-- HHS site content start //-->
<div class="hhs-content">
	<!-- Page Title start //-->
	<section class="hhs-page-title-1" data-stellar-background-ratio="0.5">
		<div class="container">
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
		</div>
	</section>
	<!-- Desktop breadscrubs start //-->
	<?php if ($breadcrumb): ?>
	<section class="hhs-desktop-breadscrubs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="hhs-desktop-breadscrubs-inner">
						<?php print $breadcrumb; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- Mobile breadscrubs start -->
	<?php if ($breadcrumb): ?>
	<section class="hhs-mobile-breadscrubs">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <?php print $breadcrumb; ?>
            </div>
          </div>
        </div>
    </section>
    <?php endif; ?>

<?php  if($page['slider']):?>
	<?php print render($page['slider']) ?>
<?php endif; ?>

	<section class="hhs-section">
        <div class="container">
          	<div class="row">
				<div class="col-lg-9">
				<?php  if($page['content']):?>
				<?php
					if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
						print render($tabs);
					endif;
					print $messages;
				?>
				<?php print render($page['content']) ?>
				<?php endif; ?>
				</div>
				<div class="col-lg-3">
				<?php  if($page['sidebar_second']):?>
					<?php print render($page['sidebar_second']) ?>
				<?php endif; ?>
				</div>
    		</div>
    	</div>
    </section>
    <?php  if($page['section']):?>
	<?php print render($page['section']) ?>
	<?php endif; ?>
</div>
<!-- HHS site content end //-->

<?php require_once(drupal_get_path('theme','hhs').'/tpl/footer.tpl.php');?>