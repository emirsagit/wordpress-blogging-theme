<?php

/**
 * Single post template file.
 *
 * @package Aquila
 */

get_header();

?>
<main id="main" class="site-main mt-4" role="main">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-12 px-4">

				<div class="text-center pb-1">

					<h1 class="sing-tit"><?php the_title(); ?></h1>

				</div>
				<div class="d-flex justify-content-between text-muted">
					<p>Yazar: <?php echo get_the_author(); ?> </p>
					<p><?php aquila_posted_on(); ?></p>
				</div>
				<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

				<?php if (has_post_thumbnail()) { ?>

					<?php the_post_thumbnail('single', array('class' => 'img-fluid shadow')); ?>

				<?php } else { ?>

					<div class="row spacer-sing"></div>

				<?php }  ?>

				<div class="sing-cont my-4">

					<div class="sing-spacer">

						<?php the_content(); ?>

					</div>

				</div>

			<?php endwhile; ?>
		<?php else : ?>

			<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>

		<div class="d-flex justify-content-between mb-4">
			<div>
				<?php previous_post_link(); ?>
			</div>
			<div>
				<?php next_post_link(); ?>
			</div>
		</div>
			</div>
			<div class="col-lg-3 col-sm-12">

				<?php
				get_sidebar();
				get_template_part('template-parts/components/_sidebar');
				?>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
?>

<script>
	let questions = document.getElementsByTagName("h4")

	for (question of questions) {
		console.log(question)
		let beforeAdded = question.innerHTML;
		question.innerHTML += " (Yanıt için tıklayınız)";
		question.onclick = function(question) {
			//answer = question.target.children[0]
			if (question.target.children[0].style.display && question.target.children[0].style.display != 'none') {
				question.target.innerHTML += " (Yanıt için tıklayınız)";
				question.target.children[0].style.display = 'none'
			} else {
				question.target.innerHTML = beforeAdded;
				question.target.children[0].style.display = 'block'
			}
		}
	}
</script>