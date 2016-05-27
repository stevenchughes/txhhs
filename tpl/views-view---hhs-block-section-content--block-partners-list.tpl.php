<?php print render($title_prefix); ?>

<div class="col-lg-9 col-md-9">
	<?php if ($header): ?>
	<?php print $header; ?>
	<?php endif; ?>

	<?php if ($rows): ?>
		<?php print $rows; ?>
	<?php endif; ?>
</div>