<div class="<?php print $classes; ?>">

	<?php print render($title_prefix); ?>
	<?php if ($header): ?>
		<?php print $header; ?>
	<?php endif; ?>
	<?php if ($exposed): ?>
	<div class="search-product view-filters">
		<?php print $exposed; ?>
	</div>
	<?php endif; ?>

	<?php if ($rows): ?>
	<div class="view-content hhs-projects-listing hhs-projects-listing-4-cols">
		<?php print $rows; ?>
	</div>
	<?php endif; ?>

	<?php if ($pager): ?>
	    <?php print $pager; ?>
	<?php endif; ?>
</div>
