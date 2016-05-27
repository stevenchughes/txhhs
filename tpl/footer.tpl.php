<?php $footer_copyright = theme_get_setting('footer_copyright_message', 'hhs'); ?>
<!-- #footer-wrapper .row -->
<footer class="site-footer"> 
	
	<!--- *** start content_bottom_left + content_bottom_d ** -->
	<?php if ($page['content_bottom_left'] || $page['content_bottom_right']): ?>
	
	<!-- #content-bottom-left-right .row -->
	<div id="content-bottom-left-right"> 
		<!-- -->
		<div class="container">
			<!-- -->
			<div class="row">
				<!-- .col-md-6 -->
				<div class="col-md-6">
                    	<?php print render($page['content_bottom_left']); ?>
               	</div>
				<!--/ -->
               
				<!-- .col-md-6 -->
               	<div class="col-md-6">
                    	<?php print render($page['content_bottom_right']); ?>
               	</div>
				<!--/ -->
      		</div>
			<!--/ -->
	 	</div>
		<!--/ -->
     </div>
	<!--/ #content-bottom-left-right .row -->
	<?php endif; ?>

	<!-- .main-footer -->
	<div class="container main-footer"> 
		
		<!-- .row-fluid ff -->
		<div class="row-fluid ff">
		
			
			<?php if (!empty($page['footer_1'])): ?>
			<div class="span3 col-md-3">
				<?php print render($page['footer_1']); ?>
			</div>
			<!--/ -->
			<?php endif; ?>
			
			
		    	<?php if (!empty($page['footer_2'])): ?>
		    	<!-- -->
			<div class="span3 col-md-3">   
				<?php print render($page['footer_2']); ?>
		    	</div>
		    	<!--/ -->
			<?php endif; ?>
			
		    
		    	<?php if (!empty($page['footer_3'])): ?>
		    	<!-- -->
			<div class="span3 col-md-3">
				<?php print render($page['footer_3']); ?>
		    	</div>
		    	<!--/ -->
			<?php endif; ?>
			
		     <?php if (!empty($page['footer_4'])): ?>
		    	
		    	<!-- -->
			<div class="span3 col-md-3">
				<?php print render($page['footer_4']); ?>
		    	</div>
		    	<!--/ -->
			<?php endif; ?>
			
			    
		</div> 
		<!--/ .row -->
		

	</div>
	<!--/ --> 
	
</footer>
<!--/ #footer-wrapper .row --> 

<script type="application/javascript">
var docWidth = document.documentElement.offsetWidth;

[].forEach.call(
  document.querySelectorAll('*'),
  function(el) {
    if (el.offsetWidth > docWidth) {
      console.log(el);
    }
  }
);

</script>
