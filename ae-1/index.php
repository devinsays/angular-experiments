<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="myapp">
<head>
	<title>Angular Experiments (1)</title>
	<?php wp_head();?>
</head>
<body>

	<div class="col-width">

		<header>
			<h1>Angular Experiments</h1>
			<p>Display a list of recent posts.</p>
		</header>

		<div ng-controller="mycontroller">
			<article ng-repeat="post in posts">
				<h3>{{ post.title }}</h3>
				<p>{{ post.excerpt }}</p>
			</article>
		</div>

	</div>

	<?php wp_footer();?>
</body>
</html>