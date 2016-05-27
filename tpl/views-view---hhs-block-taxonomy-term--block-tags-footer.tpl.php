<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<div class="hhs-widget hhs-tags-widget">
<?php if ($rows): ?>
	<div class="hhs-widget-inner">
		<?php print $rows; ?>
	</div>
<?php endif; ?>
</div>
