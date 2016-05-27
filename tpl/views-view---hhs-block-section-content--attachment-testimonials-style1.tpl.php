<?php print render($title_prefix); ?>

<div class="col-lg-6 col-md-6">
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>

<?php if ($rows): ?>
	<div class="hhs-relative" id="latest-clients-testimonials">
		<?php print $rows; ?>
		<div class="hhs-controls hhs-controls-left rivaslider-controls"></div>
	</div>
<?php endif; ?>
</div>
