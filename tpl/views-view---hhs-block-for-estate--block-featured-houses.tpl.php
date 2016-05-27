<?php print render($title_prefix); ?>

<div class="col-lg-12">
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>

<?php if ($rows): ?>
	<div class="hhs-relative" id="featured-houses">
		<?php print $rows; ?>
		<div class="hhs-controls rivaslider-controls"></div>
	</div>
<?php endif; ?>
</div>
