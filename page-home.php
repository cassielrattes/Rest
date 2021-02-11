
<?php 
	// Template Name: Menu da Semana
	get_header();
?>

	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>
			<?php if(have_rows('categoria_menu')) : while (have_rows('categoria_menu')) : the_row(); ?>
	
			<div class="menu-prato grid-8">
				<h2><?php the_sub_field('nome_categoria'); ?></h2>
				<ul>
				<?php if(have_rows('prato_menu')) : while (have_rows('prato_menu')) : the_row(); ?>
					<li>
						<span><sup>R$</sup><?php the_sub_field('preco_prato'); ?></span>
						<div>
							<h3><?php the_sub_field('nome_prato'); ?></h3>
							<p><?php the_sub_field('descricao_prato'); ?></p>
						</div>
					</li>
				<?php endwhile; endif; ?>

				</ul>
			</div>
			<?php endwhile; endif; ?>
		</section>
	<?php endwhile; endif; ?>

					<!-- <?php 
					$pratos = get_field2('pratos'); 
					if(isset($pratos)) { foreach($pratos as $prato)  {
					?>
					<li>
						<span><sup>R$</sup><?php echo $prato['preco']; ?></span>
						<div>
							<h3><?php echo $prato['nome']; ?></h3>
							<p><?php echo $prato['descricao']; ?></p>
						</div>
					</li>
					<?php }} ?> -->

		<?php get_footer(); ?>