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
  <?php  $price = field_view_field('node', $node, 'field_price'); ?>
  <div id="hhs-project-images" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php for ($i = 0;$i < $ni ;$i++) { ?>
      <li data-target="#hhs-project-images" data-slide-to="<?php print $i ?>" class="<?php if($i==0) print 'active';?>"></li>
      <?php } ?>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php
      foreach($node->field_image['und'] as $key => $value){
      $image_uri  = $node->field_image['und'][$key]['uri'];
      print '<div class="item">'.theme('image', array('path' => $image_uri, 'style_name' => 'image_1000x700', 'attributes'=>array('alt'=>$node->field_image['und'][$key]['alt']))).'<div class="carousel-caption">'.$node->field_image['und'][$key]['image_field_caption']['value'].'</div></div>';
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
  </div>
  <div class="header">
    <h2><?php print $title; ?></h2>
    <p class="price"><?php print $price[0]["#markup"]; ?></p>
    <p class="type"><span><?php print $node->field_property['und'][0]['value'] ?> / For <?php print strip_tags(render($content['field_estate_categories'])) ?></span></p>
  </div>
  <?php
    hide($content['links']);
    hide($content['field_image']);
    hide($content['field_price']);
    hide($content['field_property']);
    hide($content['comments']);
    hide($content['field_estate_categories']);
    hide($content['field_size']);
    hide($content['field_contract']);
    hide($content['field_bedrooms']);
    hide($content['field_bathrooms']);
    hide($content['field_featured']);
    hide($content['field_map_position']);
    hide($content['field_position_title']);
    hide($content['field_avatar']);
    hide($content['field_agent_name']);
    hide($content['field_phone']);
    hide($content['field_email']);
    hide($content['field_social_network']);
    print render($content);
  ?>
  <!-- Property Info start //-->
  <div class="hhs-100">
    <!-- overview //-->
    <div class="hhs-propert-details">
      <div class="inner">
        <h3><?php print t('overview') ?></h3>
        <ul>
          <li><?php print t('Property') ?> <span><?php print $node->field_property['und'][0]['value'] ?></span></li>
          <li><?php print t('Contract') ?> <span><?php print $node->field_contract['und'][0]['value'] ?></span></li>
          <li><?php print t('Size') ?> <span><?php print $node->field_size['und'][0]['value'] ?></span></li>
          <li><?php print t('Bedrooms') ?> <span><?php print $node->field_bedrooms['und'][0]['value'] ?></span></li>
          <li><?php print t('Bathrooms') ?> <span><?php print $node->field_bathrooms['und'][0]['value'] ?></span></li>
        </ul>
      </div>
    </div>
    <!-- on the map //-->
    <div class="hhs-propert-details">
      <div class="inner">
        <h3><?php print t('on the map') ?></h3>
        <div id="hhs-property-map" data-position="<?php print $node->field_map_position['und'][0]['value'] ?>" data-title="<?php print $node->field_position_title['und'][0]['value'] ?>"></div>
      </div>
    </div>
    <!-- contract agent //-->
    <div class="hhs-propert-details">
      <div class="inner">
        <h3><?php print t('contract agent'); ?></h3>
        <div class="agent">
          <?php if(isset($node->field_avatar) && !empty($node->field_avatar)) { ?>
          <figure><?php print theme('image', array('path' => $node->field_avatar['und'][0]['uri'], 'style_name' => '', 'attributes'=>array('alt'=>$node->field_avatar['und'][0]['alt']))) ?></figure>
          <?php } ?>
          <?php print $node->field_agent_name['und'][0]['value']; ?>
        </div>
        <p><i class="fa fa-phone"></i> <?php print $node->field_phone['und'][0]['value']; ?></p>
        <?php if (!empty($node->field_email['und'][0]['value'])): ?>
        <p><i class="fa fa-envelope"></i> <a href="mailto:<?php print $node->field_email['und'][0]['value']; ?>"><?php print $node->field_email['und'][0]['value']; ?></a></p>
        <?php endif; ?>
        <?php if (!empty($node->field_social_network['und'][0]['value'])): ?>
        <p class="agent-cosial">
          <?php print $node->field_social_network['und'][0]['value']; ?>
        </p>
        <?php endif; ?>
      </div>
    </div>

  </div>

  <?php } ?>
  <!-- End main content -->