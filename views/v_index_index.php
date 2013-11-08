<div class="jumbotron">
	<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?>!</h1>
	<?php if(!$user): ?>
		<h3><?=APP_NAME?> is a dumb Twitter clone.</h3>
		<br>
	<?php endif; ?>
</div>
<p>
	<strong>Please note!</strong> As you're viewing the source of these pages, you may find what appear to be an inordinate number of entirely unnecessary &ltdiv&gt's; these are necessitated by <a href="http://getbootstrap.com/">Bootstrap</a>, upon which this site's styling is built. 
	<br><br>
	+1 features:
	<ul>
		<li>Fully width-responsive (via the aforementioned <a href="http://getbootstrap.com/">Bootstrap</a>)</li>
		<li>Posts are made via modal, so there isn't a dedicated page
			<ul><li>Post submit button is inactive if post is blank</ul></li></li>
		<li>User automatically follows itself upon creation, and then isn't visible in follow list
			<ul><li>User's own posts always appear in user's feed</li></ul></li>
		<li>Profile contains a list of previous posts</li>
		<li>All post lists are sorted by date, with most recent on top</li>
	</ul>
	<br>
	That's it for now. I'm planning to add some other things at some point, but obviously that doesn't matter for purposes of the project.
</p>