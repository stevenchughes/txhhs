<?php
$out = '';
if($block->region == 'section'){

	$out .= '<section class="hhs-section '.$classes.'" '.$attributes.'>';
	$out .= '<div class="container"><div class="row">';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<h2>'.$block->title.'</h2>';
	endif;
	$out .= $content;
	$out .= '</div></div></section>';

} else if($block->region == 'section_with_sidebar' || $block->region == 'slider'){

	$out .= '<section class="hhs-section '.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<h2>'.$block->subject.'</h2>';
	endif;
	$out .= $content;
	$out .= '</section>';


}elseif($block->region == 'footer'){
	$out .= '<div class="'.$classes.'"  '.$attributes.' >';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<h3 class="title">'.$block->title.'</h3>';
	endif;
	$out .= $content;
	$out .= '</div>';

}elseif($block->region == 'sidebar_second' || $block->region == 'sidebar_two'){

	$out .= '<aside class="hhs-widget '.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
    if ($block->subject)
		$out .= '<h3>'.$block->title.'</h3>';
	$out .= '<div class="hhs-widget-inner">';
	$out .= $content;
	$out .= '</div></aside>';

}elseif($block->region == 'bottom_estate'){

	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
    if ($block->subject)
		$out .= '<h3>'.$block->title.'</h3>';
	$out .= $content;
	$out .= '</div>';

}elseif($block->region == 'bottom_product'){

	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
    if ($block->subject)
		$out .= '<h2>'.$block->title.'</h2>';
	$out .= $content;
	$out .= '</div>';


}elseif($block->region == 'main_menu'){
	$out .= '<nav class="'.$classes.'"  '.$attributes.'>';
	$out .= render($title_suffix);
	$out .= $content;
	$out .= '</nav>';

}elseif($block->region == 'sidebar_second'){
	$out .= '<aside class="'.$classes.'" '.$attributes.' >';
	$out .= render($title_suffix);
   if ($block->subject)
		$out .= '<h4>'.$block->subject.'</h4>';
	$out .= $content;
	$out .= '</aside>';

}elseif($block->region == 'content'){
	$out .= $content;

}else{
	$out .= '<div id="'.$block_html_id.'" class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	 if ($block->subject)
		$out .= '<h5>'.$block->subject.'</h5>';
	$out .= $content;
	$out .= '</div>';
}
print $out;
?>