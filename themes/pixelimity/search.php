<?php get_header(); ?>

	<?php if (have_portfolio()) { ?>
	
		<h1 class="archive-title">Search Result: <?php echo strip_tags($_GET['search']); ?></h1>
	
		<!-- BEGIN .portfolio-items -->
		<div class="portfolio-items">
	
			<?php while (have_portfolio()) { the_portfolio(); ?>
			
				<?php get_template_part('content'); ?>
				
			<?php } ?>
		
		<!-- END .portfolio-items -->
		</div>
		
		<?php portfolio_nav(); ?>
		
	<?php } ?>

<?php get_footer(); ?>