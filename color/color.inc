<?php

// Put the logo path into JavaScript for the live preview.
drupal_add_js(array('color' => array('logo' => theme_get_setting('logo', 'hhs'))), 'setting');

$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'base' => t('Main'),   
    'text' => t('Text'),
    'link' => t('Link'), 
    'bg'   => t('Background'),        
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Default'),
      'colors' => array(
        'base' => '#ffffff',  
        'text' => '#333333',      
        'link' => '#4a4a4a', 
        'bg'   => '#2eb6d1',       
      ),
    ),
    'blue' => array(
      'title' => t('Blue'),
      'colors' => array(
        'base' => '#ffffff',        
        'text' => '#727272',
        'link' => '#3183d7',  
        'bg'   => '#2C5C8E',      
      ),
    ),
    'green' => array(
      'title' => t('Green'),
      'colors' => array(
        'base' => '#ffffff',    
        'text' => '#727272',    
        'link' => '#3fc35f', 
        'bg'   => '#34904A',             
      ),
    ),
    'cyan' => array(
      'title' => t('Cyan'),
      'colors' => array(
        'base' => '#ffffff',  
        'text' => '#727272',      
        'link' => '#35d3b7', 
        'bg'   => '#349080',        
      ),
    ),
    'orange' => array(
      'title' => t('Orange'),
      'colors' => array(
        'base' => '#ffffff',        
        'text' => '#727272',
        'link' => '#ff6e41', 
        'bg'   => '#ff6e41',        
      ),
    ),
    'lightblue' => array(
      'title' => t('Light Blue'),
      'colors' => array(
        'base' => '#ffffff',     
        'text' => '#727272',   
        'link' => '#37c6f5',  
        'bg'   => '#2EB6D1',       
      ),
    ),
    'pink' => array(
      'title' => t('Pink'),
      'colors' => array(
        'base' => '#ffffff',    
        'text' => '#727272',    
        'link' => '#fa3aab',
        'bg'   => '#944B8E',         
      ),
    ),
    'purple' => array(
      'title' => t('Purple'),
      'colors' => array(
        'base' => '#ffffff',    
        'text' => '#727272',    
        'link' => '#c762cb', 
        'bg'   => '#c762cb',        
      ),
    ),
    'bridge' => array(
      'title' => t('Bridge'),
      'colors' => array(
        'base' => '#ffffff',  
        'text' => '#727272',      
        'link' => '#a5d549', 
        'bg'   => '#a5d549',        
      ),
    ),
    'slate' => array(
      'title' => t('Slate'),
      'colors' => array(
        'base' => '#ffffff',     
        'text' => '#727272',   
        'link' => '#6b798f',
        'bg'   => '#6b798f',         
      ),
    ),
    'yellow' => array(
      'title' => t('Yellow'),
      'colors' => array(
        'base' => '#ffffff',        
        'text' => '#727272',
        'link' => '#f2d438',
        'bg'   => '#f2d438',         
      ),
    ),
    'darkred' => array(
      'title' => t('Dark Red'),
      'colors' => array(
        'base' => '#ffffff',        
        'text' => '#727272',
        'link' => '#970001', 
        'bg'   => '#970001',         
      ),
    ),
  ),

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),

  // Files to copy.
  'copy' => array(
    'logo.png',
  ),

  // Gradient definitions.
  'gradients' => array(
    array(
      // (x, y, width, height).
      'dimension' => array(0, 0, 0, 0),
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => array('top', 'bottom'),
    ),
  ),

  // Color areas to fill (x, y, width, height).
  'fill' => array(),

  // Coordinates of all the theme slices (x, y, width, height)
  // with their filename as used in the stylesheet.
  'slices' => array(),

  // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',

  // Preview files.
  'preview_css' => 'color/preview.css',
  'preview_js' => 'color/preview.js',
  'preview_html' => 'color/preview.html',

  // Base file for image generation.
  'base_image' => 'color/base.png',
);
