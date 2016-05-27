<?php print render($title_prefix); ?>

<div class="hhs-tabs">
	<?php if ($header): ?>
	<header>
	<?php print $header; ?>
	</header>
	<?php endif; ?>
	<?php if ($attachment_before): ?>
	<article>
		<?php print $attachment_before; ?>
	</article>
	<?php endif; ?>
	<?php if ($rows): ?>
	<article>
		<?php print $rows; ?>
	</article>
	<?php endif; ?>
	<?php if ($footer): ?>
	<article>
		<?php print $footer; ?>
	</article>
	<?php endif; ?>
</div>
