<?php
  $phone = theme_get_setting('phone_contact', 'hhs');
  $email = theme_get_setting('contact_email', 'hhs');
  $social_header = theme_get_setting('social_network', 'hhs');
  global $base_url;
?>
<header class="hhs-header hhs-header-1">
    <!-- Top bar start //-->
    <div class="hhs-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact information start//-->
                    <?php if (!empty($phone)){ ?>
                    <p class="contacts"><i class="fa fa-phone"></i> <?php print $phone; ?></p>
                    <?php } ?>
                    <?php if (!empty($email)) {?>
                    <p class="contacts"><i class="fa fa-envelope"></i> <a href="mailto:<?php print $email; ?>"><?php print $email; ?></a></p>
                    <!--Contact information end //-->
                    <?php } ?>
                    <!-- Social Buttons start//-->
                    <?php if (!empty($social_header)) print  $social_header;?>
                </div>
            </div>
        </div>
        <!-- Top bar end //-->
    </div>

    <!-- Logo & Menu start //-->
</header>
<div class="hhs-content hhs-content-404" data-stellar-background-ratio="0.5">
    <div class="hhs-content-404-gradient"></div>
        <!--

        404 Page Content start

        //-->
        <div class="hhs-content-404-inner">
            <!-- Site Logo start //-->
            <?php if($logo) { ?>
            <a href="<?php print $base_url; ?>">
                <div class="hhs-logo">
                    <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>">
                    <?php $text_logo = theme_get_setting('text_logo', 'hhs'); ?>
                    <?php
                    $text_logo_enable = theme_get_setting('text_logo_enable', 'hhs');
                    if(empty($text_logo_enable)) $text_logo_enable = 'on';
                    ?>
                    <?php if ($text_logo_enable == 'on' && !empty($text_logo)): ?>
                    <p class="logo"><?php print $text_logo; ?></p>
                    <?php endif; ?>
                    <?php if ($site_slogan){ ?>
                    <p class="tagline"><?php print $site_slogan; ?></p>
                    <?php } ?>
                    <!--  Site Logo end  //-->
                </div>
            </a>
            <?php } ?>

            <p class="oops">oops!</p>
            <p class="note">The page you are looking does not exist! Try to search something different.</p>
            <p>&nbsp;</p>
            <div class="hhs-404-search-form">
            <?php
                $block = module_invoke('search', 'block_view', 'search');
                print render($block['content']);
            ?>
            </div>
            <p>&nbsp;</p>
        <!-- 404 Page Content end //-->
        </div>
    <?php  if($page['section']):?>
    <?php print render($page['section']) ?>
    <?php endif; ?>

</div>