<?php print render($title_prefix); ?>

<div class="col-lg-3 col-md-3">
	<?php if ($header): ?>
	<?php print $header; ?>
	<?php endif; ?>

	<?php if ($rows): ?>
	<nav class="hhs-side-navi">
		<?php print $rows; ?>
	</nav>
	<?php endif; ?>
</div>