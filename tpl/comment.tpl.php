<!-- Comment item //-->
<div class="hhs-comment">
  <div class="inner">
    <?php if($picture){ ?>
    <figure>
      <?php print $picture; ?>
    </figure>
    <?php }  else print '<i class="fa fa-user"></i>'; ?>
    <?php
      if($comment->uid != 0) {
        $user = user_load($comment->uid);
        $full_name = $user->field_full_name['und'][0]['value'];
      }
    ?>
    <p class="meta">
      <span class="author">
      <?php if(isset($full_name)) { ?>
      <?php print $full_name; ?>
      <?php } else { ?>
      <?php print theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url'))) ?>
      <?php } ?> <?php print t('says:') ?>
      </span>
      <span class="date"><?php print t('posted on') ?> <?php print format_date($comment->created, 'custom', 'd M, Y'); ?></span>
    </p>
    <div class="entry">
    <?php hide($content['links']); print render($content) ?></p>
    </div>
    <p class="reply"><?php print strip_tags(render($content['links']),'<a>'); ?></p>
  </div>
</div>
