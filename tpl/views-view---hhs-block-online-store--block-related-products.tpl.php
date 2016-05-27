<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>

<?php if ($rows): ?>
<div class="hhs-relative" id="related-products">
	<?php print $rows; ?>
	<div class="hhs-navigation hhs-navigation-left rivaslider-navigation">
        <a href="" class="back"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a href="" class="forward"><i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
</div>
<?php endif; ?>
<?php if ($pager): ?>
<?php print $pager; ?>
<?php endif; ?>