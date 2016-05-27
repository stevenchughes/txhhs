<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;

  if(isset($node->field_image)){
  $imageone = $node->field_image['und'][0]['uri'];
  $ni = count($node->field_image['und']);
  }else{
  $imageone = '';
  $ni = 0;
  }
  if(!$page){ ?>
  <?php } else { ?>
  <div class="col-lg-3">
    <h4><?php print t('about') ?> <strong><?php print t('project') ?></strong></h4>
    <p class="project-date"><i class="glyphicon glyphicon-calendar"></i> <?php print format_date($node->created, 'custom', 'M d, Y');?></p>
    <p><?php print @$node->body['und']['0']['summary']; ?></p>
    <p>&nbsp;</p>
    <h4><?php print t('used') ?> <strong><?php print t('skills') ?></strong></h4>
    <p class="used-skills">
    <?php  print strip_tags(render($content['field_used_skills']),'<span>,<i>'); ?>
    </p>
    <h4><strong><?php print t('client') ?></strong></h4>
    <p><?php  print strip_tags(render($content['field_client']),'<a>'); ?></p>
    <p>&nbsp;</p>
    <?php if (!empty($node->field_launch_project['und'][0]['value'])): ?>
    <p><a href="<?php print $node->field_launch_project['und'][0]['value']; ?>" class="hhs-btn hhs-btn-normal hhs-btn-primary"><i class="glyphicon glyphicon-link"></i> <?php print t('launch the project'); ?></a></p>
    <?php endif; ?>
  </div>
  <div class="col-lg-9">
    <div id="hhs-project-images" class="carousel slide" data-ride="carousel">
    <?php if ($ni == 1) { ?>
      <?php print theme('image', array('path' => $imageone, 'style_name' => 'image_1000x700', 'attributes'=>array('alt'=>$title))) ?>
    <?php } else { ?>
    <ol class="carousel-indicators">
    <?php
    for ($i = 0; $i < $ni; $i++) {
      print '<li data-target="#hhs-project-images" data-slide-to="'.$i.'"></li>';
    }
    ?>
    </ol>
      <div class="carousel-inner">
      <?php
          foreach($node->field_image['und'] as $key => $value){
            $image_uri  = $node->field_image['und'][$key]['uri'];
            print '<div class="item">'.theme('image', array('path' => $image_uri, 'style_name' => 'image_1000x700', 'attributes'=>array('alt'=>$title))).'<div class="carousel-caption"></div></div>';
          }
        ?>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#hhs-project-images" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#hhs-project-images" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    <?php } ?>
    </div>
  </div>
  <div class="clear mb20"></div>
  <div class="col-lg-12">
    <h4><?php print $title; ?></h4>
    <p>
    <?php
      hide($content['links']);
      hide($content['field_image']);
      hide($content['field_client']);
      hide($content['field_used_skills']);
      hide($content['comments']);
      hide($content['field_portfolio_category']);
      hide($content['field_launch_project']);
      print render($content);
    ?>
    </p>
  </div>
  <?php } ?>
  <!-- End main content -->