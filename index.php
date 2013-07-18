<?php get_header(); ?>

	<section id="content" role="main">
		
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) { 
					the_post();
					$the_type = $post->post_type;

					if ($the_type == 'post') {
		?>				
						<article class="<?php echo $the_type . ' ' . print_categories($post->ID); ?>">
							<header>
								<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							</header>

							<figure class="thumbnail">
								 <?php the_post_thumbnail('featured'); ?>
							</figure>

							<footer>
							<a href="<?php the_permalink(); ?>">Leia mais</a> sobre este artigo de <?php echo print_author($post->post_author); ?> sobre  <?php the_category(', '); ?> postado em <time datetime="<?php the_time('c');?>"><?php the_time('d/m/Y');?></time>
							</footer>
						</article>
				<?php 
					} elseif ($the_type == 'nota' ) { 
						$url = get_post_meta($post->ID, 'nota_url');
				?>
					<article class="<?php echo $the_type; ?>">
						<a href="<?php echo $url[0]; ?>">
							<h1 class="title"><?php the_title(); ?></h1>
							<p class="short-description"><?php the_content(); ?></p>
						</a>
					</article>
			<?php 
				} else {
					continue;		
				} 
			} ?>
		<?php } else { ?>
			<article class="error">
				<h1>Ops!</h1>
				<p>Foi mal! Nenhum artigo encontrado!</p>
			</article>
		<?php } ?>

	</section>

<?php get_footer(); ?>
