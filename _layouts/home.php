<!DOCTYPE html>
<html>	
	{% include head.html %}
	<body>
		<header class="site-header">
			{% include navigation.html %}
			<div class="home-header">
				<div class="container">
					<h1>Hi there</h1>
					<h3>I am Pronomad, an full-stack web developer. Glad you visited my site.</h3>
				</div>
			</div>
		</header>
		<div class="home-content">
			<div class="wrapper">
				{{ content }}
			</div>
		</div>
		{% include footer.html %}
	</body>
</html>
