<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>

<div class="col-lg-4 col-md-4 hhs-section-align-left">
<?php if ( empty($title) ): ?>
	<?php $title = $view->get_title(); ?>
<?php endif; ?>
<?php if ($title): ?>
	<h2><?php print t($title); ?></h2>
<?php endif; ?>
<?php if ($rows): ?>
	<div class="hhs-relative" id="testimonials">
		<?php print $rows; ?>
		<div class="hhs-controls hhs-controls-left rivaslider-controls"></div>
	</div>
<?php endif; ?>
</div>

