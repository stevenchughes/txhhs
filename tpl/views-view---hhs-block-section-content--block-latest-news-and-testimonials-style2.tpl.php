<?php print render($title_prefix); ?>
<div class="col-lg-9">
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
	<?php if ($rows): ?>
	<div class="hhs-relative" id="latest-news-3">
		<?php print $rows; ?>
		<div class="hhs-navigation hhs-navigation-left rivaslider-navigation">
            <a href="" class="back"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a href="" class="forward"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
	</div>
	<?php endif; ?>
</div>
<?php if ($attachment_after): ?>
<div class="col-lg-3">
<?php print $attachment_after; ?>
</div>
<?php endif; ?>
