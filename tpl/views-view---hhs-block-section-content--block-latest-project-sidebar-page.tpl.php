<?php print render($title_prefix); ?>
<div class="row">
	<div class="col-lg-12">
	<?php if ($header): ?>
	<?php print $header; ?>
	<?php endif; ?>

	<?php if ($rows): ?>
		<div class="hhs-relative" id="latest-projects-3">
			<?php print $rows; ?>
			<div class="hhs-navigation hhs-navigation-left rivaslider-navigation">
	            <a href="" class="back"><i class="glyphicon glyphicon-chevron-left"></i></a>
	            <a href="" class="forward"><i class="glyphicon glyphicon-chevron-right"></i></a>
	        </div>
		</div>
	<?php endif; ?>
	</div>
</div>
