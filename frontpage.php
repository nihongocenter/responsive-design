<?php
	include('texts/' . ICL_LANGUAGE_CODE . '.php');

	$is = $texts['international-school'];
	$pj = $texts['practical-japanese'];
	$ce = $texts['cultural-experience'];

	// displayCourse
	function displayCourse($course) {
		?>
		<section class="flex-bubble" itemscope itemtype="http://schema.org/Product">
			<h3 itemprop="name"><?php echo $course['title']; ?></h3>
			<p itemprop="description">
				<?php echo $course['text']; ?>
			</p>
		</section>
		<?php
	}
?>

<!-- Flex bubbles -->
<div class="flex-bubble-container">
	<a href="<?php echo icl_get_home_url() ?>about/international-school" class="flex-bubble international-school">
		<section>
			<div class="image-link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about/international-school.png" alt="Japanese Language School: International Diversity" class="img-circle mover">
			</div>
			<h3><?php echo $is['title']; ?></h3>
			<p>
				<?php echo $is['text']; ?>
			</p>
		</section>
	</a>

	<a href="<?php echo icl_get_home_url() ?>about/practical-japanese" class="flex-bubble practical-japanese">
		<section>
			<div class="image-link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about/practical-japanese.png" alt="Japanese Language School: Practical Japanese" class="img-circle mover">
			</div>
			<h3><?php echo $pj['title']; ?></h3>
			<p>
				<?php echo $pj['text']; ?>
			</p>
		</section>
	</a>

	<a href="<?php echo icl_get_home_url() ?>about/cultural-experience" class="flex-bubble cultural-experience">
		<section>
			<div class="image-link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about/cultural-experience.png" alt="Japanese Language School: Cultural Experience" class="img-circle mover">
			</div>
			<h3><?php echo $ce['title']; ?></h3>
			<p>
				<?php echo $ce['text']; ?>
			</p>
		</section>
	</a>
</div>

<section class="bubble news">
	<h2 style="display: block; text-align: center;">News</h2>
	<ul>
		<?php
			$recent_posts = wp_get_recent_posts(array(
				'numberposts' => '8',
				'suppress_filters' => false
			));
			
			$now = (new DateTime())->getTimestamp();
			$oneMonth = 30 * 24 * 60 * 60;
			
			foreach($recent_posts as $recent) {
				$dateTime = new DateTime($recent["post_date"]);
				$timeStamp = $dateTime->getTimestamp();
				//$img = get_the_post_thumbnail($recent["ID"], array(64, 64));
				// <div class="image-container">' . $img . '</div> 
				echo '<li><a href="' . get_permalink($recent["ID"]) . '"><div class="post-container">';
				
				// Date
				if($now - $timeStamp > $oneMonth) {
					echo '<span class="post-date" style="display: inline-block; width: 90px; font-size: 80%; opacity: 0.8">' . $dateTime->format('Y-m-d') . '</span>';
				} else {
					echo '<span class="post-date" style="display: inline-block; width: 90px; color: red; font-size: 80%; opacity: 0.8">New!</span>'; 
				}
				
				echo $recent["post_title"] . '</div></a></li> ';
			}
		?>
	</ul>
</section>

<!-- Course overview: DISABLED -->
<?php if(ICL_LANGUAGE_CODE == 'en'): ?>
<section class="course-overview">
	<a href="/japanese-course/" class="course-overview-link" title="Course overview">
		<h2 style="border: none;"><?php echo $texts['course-overview']; ?></h2>
		<picture>
			<source
				media="(max-width: 640px)"
				srcset="<?php echo get_template_directory_uri() . '/img/course-overview-640w.jpg'; ?>">
			<source
				media="(max-width: 1366px)"
				srcset="<?php echo get_template_directory_uri() . '/img/course-overview-1015w.jpg'; ?>">
			<img src="<?php echo get_template_directory_uri() . '/img/course-overview-1385w.jpg'; ?>" alt="Japanese Language School"/>
		</picture>
	</a>

	<div class="flex-bubble-container">
		<?php
			for($i = 1; $i <= 2; $i++) {
				displayCourse($texts["course-$i"]);
			}
		?>
	</div>

	<div class="flex-bubble-container">
		<?php
			for($i = 3; $i <= 4; $i++) {
				displayCourse($texts["course-$i"]);
			}
		?>
	</div>
</section>
<?php endif; ?>