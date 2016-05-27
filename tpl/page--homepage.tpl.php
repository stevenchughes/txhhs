<?php require_once(drupal_get_path('theme','hhs').'/tpl/header.tpl.php'); ?>
<?php
if (isset($node->field_sidebar['und'][0]['value'])){
	$sidebar = $node->field_sidebar['und'][0]['value'];
} else $sidebar = 'none';
?>
<!-- HHS site content start //-->
<div class="hhs-content">
<?php  if($page['content']):?>
	<?php
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		print $messages;
	?>
	<?php print render($page['content']) ?>
<?php endif; ?>

<?php  if($page['slider']):?>
	<?php print render($page['slider']) ?>
<?php endif; ?>

<?php if ($sidebar != 'rightsidebar' && $sidebar != 'leftsidebar') { ?>
	<?php  if($page['section']):?>
	<?php print render($page['section']) ?>
	<?php endif; ?>
<?php } else { ?>
	<div class="container">
    	<div class="row">
		<?php if ($sidebar == 'rightsidebar') { ?>
			<div class="col-lg-9 col-md-9">
			<?php  if($page['section_with_sidebar']):?>
			<?php print render($page['section_with_sidebar']) ?>
			<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-3">
			<?php  if($page['sidebar_second']):?>
				<section class="hhs-section">
				<?php print render($page['sidebar_second']) ?>
				</section>
			<?php endif; ?>
			</div>
		<?php } else { ?>
			<div class="col-lg-3 col-md-3">
			<?php  if($page['sidebar_second']):?>
				<section class="hhs-section">
				<?php print render($page['sidebar_second']) ?>
				</section>
			<?php endif; ?>
			</div>
			<div class="col-lg-9 col-md-9">
			<?php  if($page['section_with_sidebar']):?>
			<?php print render($page['section_with_sidebar']) ?>
			<?php endif; ?>
			</div>
		<?php } ?>
    	</div>
    </div>
    <?php  if($page['section']):?>
	<?php print render($page['section']) ?>
	<?php endif; ?>
<?php } ?>

</div>
<!-- HHS site content end //-->

<?php require_once(drupal_get_path('theme','hhs').'/tpl/footer.tpl.php');?>