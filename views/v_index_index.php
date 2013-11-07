<div class="jumbotron">
	<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?>!</h1>
	<?php if(!$user): ?>
		<h3><?=APP_NAME?> is a dumb Twitter clone.</h3>
		<br>
	<?php endif; ?>
</div>