<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<div class="hhs-widget">
	<?php if ($rows): ?>
	<div class="hhs-widget-inner">
		<div class="hhs-wrapper" id="footer-news">
		<?php print $rows; ?>
			<div class="hhs-navigation hhs-navigation-left rivaslider-navigation">
            	<a href="" class="back"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a href="" class="forward"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
	</div>
	<?php endif; ?>
</div>
