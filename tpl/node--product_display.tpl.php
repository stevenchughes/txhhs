<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;

  if(isset($content['product:field_image'])){
    $ni = count($content['product:field_image']['#items']);
  }else{
  $imageone = '';
  $ni = 0;
  }
  if(!$page){ ?>

  <?php } else { ?>
  <div class="row hhs-margin-top-0">
    <!-- Product images -->
    <div class="col-lg-7">
      <div id="hhs-project-images" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php for ($i = 0;$i < $ni ;$i++) { ?>
          <li data-target="#hhs-project-images" data-slide-to="<?php print $i ?>" class="<?php if($i==0) print 'active';?>"></li>
          <?php } ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php
          foreach($content['product:field_image']['#items'] as $key => $value){
          $image_uri  = $content['product:field_image']['#items'][$key]['uri'];
          $image_url = file_create_url($image_uri);
          print '<div class="item"><a href="'.$image_url.'" class="colorbox">'.theme('image_style', array('path' => $image_uri, 'style_name' => 'image_900x600', 'attributes'=>array('alt'=>$content['product:field_image']['#items'][$key]['alt']))).'</a><div class="carousel-caption">'.$content['product:field_image']['#items'][$key]['image_field_caption']['value'].'</div></div>';
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
    </div>
    <div class="col-lg-5">
      <h3><?php print $title; ?></h3>
      <div class="price"><?php print render($content['product:commerce_price']) ;?></div>
      <?php print render($content['product:field_product_description']) ; ?>
      <?php print render($content['product:add_to_cart_form']) ; ?>
      <?php
      $sku = render($content['product:sku']);
      $product = commerce_product_load_by_sku($sku);
      hide($content['links']);
      hide($content['comments']);
      hide($content['product:field_product_description']);
      hide($content['product:field_image']);
      hide($content['product:commerce_price']);
      hide($content['product:field_quantity_products']);
      hide($content['field_product_category']);
      hide($content['body']);
      print render($content);
      ?>
    </div>
  </div>
  <div class="row hhs-margin-top-10">
    <!--Product Details -->
    <div class="col-lg-12">
      <h3 class="h3-2"><?php print t('product details') ;?></h3>
      <?php
        hide($content['links']);
        hide($content['comments']);
        hide($content['product:product']);
        hide($content['product:add_to_cart_form']);
        print render($content['body']);
      ?>
    </div>
  </div>

  <?php } ?>
  <!-- End main content -->