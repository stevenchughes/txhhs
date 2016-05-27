<?php print render($title_prefix); ?>

<div class="col-lg-12">
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>

<?php if ($rows): ?>
	<div class="hhs-relative" id="latest-added-homes">
		<?php print $rows; ?>
		<div class="hhs-navigation rivaslider-navigation">
            <a href="" class="back"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a href="" class="forward"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
	</div>
<?php endif; ?>
</div>
