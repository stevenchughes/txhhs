<?php print render($title_prefix); ?>
<div class="row">
	<div class="col-lg-5 col-md-5">
	<?php if ($header): ?>
	<?php print $header; ?>
	<?php endif; ?>

	<?php if ($rows): ?>
		<div class="hhs-relative" id="latest-news-1">
			<?php print $rows; ?>
			<div class="hhs-navigation hhs-navigation-left rivaslider-navigation">
	            <a href="" class="back"><i class="glyphicon glyphicon-chevron-left"></i></a>
	            <a href="" class="forward"><i class="glyphicon glyphicon-chevron-right"></i></a>
	        </div>
		</div>
	<?php endif; ?>
	</div>
	<?php if ($attachment_after): ?>
	<div class="col-lg-7 col-md-7">
		<?php print $attachment_after; ?>
	</div>
	<?php endif; ?>
</div>
