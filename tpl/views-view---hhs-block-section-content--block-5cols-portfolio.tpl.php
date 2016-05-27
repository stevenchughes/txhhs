<?php print render($title_prefix); ?>

<div class="hhs-sorting" id="portfolio-sorting">
	<?php if ($header): ?>
	<?php print $header; ?>
	<?php endif; ?>
	<?php if ($rows): ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="hhs-projects-listing hhs-projects-listing-5-cols">
				<?php print $rows; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
<?php if ($pager): ?>
    <?php print $pager; ?>
<?php endif; ?>

