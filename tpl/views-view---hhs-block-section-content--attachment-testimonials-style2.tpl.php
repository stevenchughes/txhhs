<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>

<?php if ($rows): ?>
<div class="hhs-relative" id="testimonials">
	<?php print $rows; ?>
	<div class="hhs-controls hhs-controls-left rivaslider-controls"></div>
</div>
<?php endif; ?>

