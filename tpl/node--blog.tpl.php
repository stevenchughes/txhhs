<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;
  $user = user_load($uid); // Make sure the user object is fully loaded
  $full_name = field_get_items('user', $user, 'field_full_name');
  $about = field_get_items('user', $user, 'field_about_you');
  $job = field_get_items('user', $user, 'field_job');


  $style = 'large'; //image style
  if(!empty($node->field_image)){
    $imageone = $node->field_image['und'][0]['uri'];
    $uri =$node->field_image['und'][0]['uri'];
    $url_image = file_create_url($uri);
  }else{
    $imageone = '';
  }

  if(isset($node->field_blog_format) && !empty($node->field_blog_format)){
    $blog_format = $node->field_blog_format['und'][0]['value'];
  }else{
    $blog_format = 'fa-pencil';
  }

  if (isset($_GET['style'])) {
    $blog_style = $_GET['style'];
  } else {
    $blog_style = theme_get_setting('blog_style', 'hhs');
    if(empty($blog_style)) $blog_style = 'listing1';
  }

  if(!$page){ ?>

  <?php if ($blog_style == 'listing1' || $blog_style == 'listing2') { ?>
  <article class="hhs-post <?php if ($blog_style == 'listing2') print 'hhs-post-2'; ?>">
    <figure>
      <a href="<?php print $url_image; ?>" class="colorbox"><img src="<?php print $url_image; ?>" alt="<?php print $title; ?>"></a>
      <figcaption><a href="<?php print $url_image; ?>" title="<?php print $title; ?>" class="colorbox"><i class="fa fa-plus"></i></a></figcaption>
    </figure>
    <header>
      <h3><i class="fa <?php print $blog_format; ?>"></i> <a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      <p><?php print t('posted in') ?> <?php print strip_tags(render($content['field_blog_categories']),'<a>') ?> <?php print t('by') ?> <?php print $name; ?></p>
    </header>
    <p>
      <?php
        hide($content['links']);
        hide($content['field_tags']);
        hide($content['field_embed_video']);
        hide($content['field_blog_format']);
        hide($content['comments']);
        hide($content['field_blog_categories']);
        hide($content['field_image']);
        print render($content).'...';
      ?>
    </p>
    <p><a href="<?php print $node_url; ?>" class="hhs-btn hhs-btn-small hhs-btn-secondary-border"><?php print t('read the rest') ?> <i class="fa fa-arrow-circle-right"></i></a></p>
    <div class="date">
      <span class="day"><?php print format_date($node->created, 'custom', 'd');?></span>
      <span class="month"><?php print format_date($node->created, 'custom', 'M , y');?></span>
    </div>
    <div class="likes">
      <span><i class="fa fa-comment"></i></span>
      <span class="month"><?php print $comment_count;?> <?php print t('Comments') ?></span>
    </div>
  </article>
  <?php } elseif ($blog_style == 'masonry') { ?>
  <article class="hhs-post hhs-post-masonry">
      <div class="inner">
          <figure>
              <a href="<?php print $url_image ?>" class="colorbox"><img src="<?php print $url_image ?>" alt="<?php print $title; ?>"></a>
              <figcaption><a href="<?php print $url_image ?>" title="<?php print $title; ?>" class="colorbox"><i class="fa fa-plus"></i></a></figcaption>
          </figure>
          <header>
              <h3><i class="fa fa-pencil"></i> <a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
              <p><?php print t('posted on') ?> <a href="<?php print $node_url; ?>"><?php print format_date($node->created, 'custom', 'd M , Y');?></a> <?php print t('in') ?> <?php print strip_tags(render($content['field_blog_categories']),'<a>') ?> <?php print t('by') ?> <?php print $name; ?></p>
          </header>
          <p>
            <?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_embed_video']);
            hide($content['field_blog_format']);
            hide($content['comments']);
            hide($content['field_blog_categories']);
            hide($content['field_image']);
            print render($content).'...';
            ?>
          </p>
          <p><a href="<?php print $node_url; ?>" class="hhs-btn hhs-btn-small hhs-btn-secondary-border"><?php print t('read the rest') ?> <i class="fa fa-arrow-circle-right"></i></a></p>
      </div>
  </article>
  <?php } else { ?>
  <li>
    <time class="cbp_tmtime" datetime="<?php print format_date($node->created, 'custom', 'c');?>"><span><?php print format_date($node->created, 'custom', 'm/d/y');?></span> <span><?php print format_date($node->created, 'custom', 'G:i');?></span></time>
    <div class="cbp_tmicon"><i class="fa <?php print $blog_format; ?>"></i></div>
    <div class="cbp_tmlabel">
      <article class="hhs-post">
        <figure>
          <a href="<?php print $url_image; ?>" class="colorbox"><img src="<?php print $url_image; ?>" alt="<?php print $title; ?>"></a>
          <figcaption><a href="<?php print $url_image; ?>" title="<?php print $title; ?>" class="colorbox"><i class="fa fa-plus"></i></a></figcaption>
        </figure>
        <header>
          <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
          <p><?php print t('posted in') ?> <?php print strip_tags(render($content['field_blog_categories']),'<a>') ?> <?php print t('by') ?> <?php print $name; ?></p>
        </header>
        <p>
          <?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_embed_video']);
            hide($content['field_blog_format']);
            hide($content['comments']);
            hide($content['field_blog_categories']);
            hide($content['field_image']);
            print render($content).'...';
          ?>
        </p>
        <p><a href="<?php print $node_url; ?>" class="hhs-btn hhs-btn-small hhs-btn-secondary-border"><?php print t('read the rest') ?> <i class="fa fa-arrow-circle-right"></i></a></p>
        <div class="date">
          <span class="day"><?php print format_date($node->created, 'custom', 'd');?></span>
          <span class="month"><?php print format_date($node->created, 'custom', 'm, y');?></span>
        </div>
        <div class="likes">
          <span><i class="fa fa-comment"></i></span>
          <span class="month"><?php print $comment_count;?> <?php print t('Comments') ?></span>
        </div>
      </article>
    </div>
  </li>
  <?php } ?>

  <?php } else { ?>
  <article class="hhs-post">
    <a href="<?php print $url_image; ?>" class="colorbox img"><img src="<?php print $url_image; ?>" alt="<?php print $title; ?>"></a>
    <header>
      <h3><i class="fa <?php print $blog_format; ?>"></i> <span><?php print $title; ?></span></h3>
      <p><?php print t('posted in') ?> <?php print strip_tags(render($content['field_blog_categories']),'<a>') ?> <?php print t('by') ?> <?php print $name; ?></p>
    </header>
    <?php
      hide($content['links']);
      hide($content['field_tags']);
      hide($content['field_embed_video']);
      hide($content['field_soundcloud_url']);
      hide($content['field_blog_format']);
      hide($content['comments']);
      hide($content['field_blog_categories']);
      hide($content['field_image']);
      print render($content);
    ?>
    <p class="tags"><?php print strip_tags(render($content['field_tags']),'<a>') ?></p>
    <div class="date">
      <span class="day"><?php print format_date($node->created, 'custom', 'd');?></span>
      <span class="month"><?php print format_date($node->created, 'custom', 'M, y');?></span>
    </div>
    <div class="likes">
      <span><i class="fa fa-comment"></i></span>
      <span class="month"><?php print $comment_count;?> <?php print t('Comments') ?></span>
    </div>
  </article>
  <h3><?php print t('about') ?> <strong><?php print t('author') ?></strong></h3>
  <div class="hhs-post-author">
    <?php if (!empty($user_picture)) { ?>
    <figure>
      <?php print $user_picture;?>
    </figure>
    <?php } else print '<i class="fa fa-user"></i>';?>
    <p class="name"><?php if($full_name[0]['value'] != '') {print  $full_name[0]['value'] ;} else print $name; ?></p>
    <?php if($job[0]['value'] != ''): ?>
    <p class="role"><?php print $job[0]['value']; ?></p>
    <?php endif; ?>
    <?php if($about[0]['value'] != ''): ?>
    <p><?php print $about[0]['value'] ?></p>
    <?php endif; ?>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <h3><strong>related</strong> posts</h3>
  <div class="hhs-relative" id="related-posts">
    <?php print getRelatedPosts('blog',$nid); ?>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <?php print render($content['comments']);?>

<?php

}

?>