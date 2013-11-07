<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body style="padding-top: 70px;">	

	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Spiffr</a>
			</div>
			<div class = "navbar-collapse collapse" id="menu">

				<ul class="nav navbar-nav">
					<!-- Menu for users who are logged in -->
					<?php if($user): ?>

					<li><a href='/users/profile'>Profile</a></li>
					<li><a href='/posts/users'>Follow</a></li>
					<li><a href='/posts/add'>Post</a></li>
					<li><a href='/posts/'>Feed</a></li>
					<li><a href='/users/logout'>Logout</a></li>

					<!-- Menu options for users who are not logged in -->
					<?php else: ?>

					<li><a href='/users/signup'>Sign up</a></li>
					<li><a href='/users/login'>Log in</a></li>

					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
		<div class="container">
		<br>


		<?php if(isset($content)) echo $content; ?>

		<?php if(isset($client_files_body)) echo $client_files_body; ?>
	</div>
</body>
</html>