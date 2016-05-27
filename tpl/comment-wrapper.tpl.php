<?php
	if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>
		<h3><?php print t('latest') ?> <strong><?php print t('comments') ?></strong></h3>
		<p><?php print 'There are'?> <strong><?php print $content['#node']->comment_count ?> <?php print 'comments'; ?></strong> <?php print t('on') ?> "<?php print $content['#node']->title;  ?>"</p>
		<p>&nbsp;</p>
		<div class="hhs-comments-list">
				<?php print render($content['comments']); ?>
		</div>
		<!-- Comments end //-->
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h3><?php print t('post a') ?> <strong><?php print t('comment') ?></strong></h3>
		<div class="hhs-add-comment">
		<?php print str_replace('resizable', '', render($content['comment_form'])); ?>
		</div>

<?php
	}
?>
