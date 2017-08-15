<div class="container mainPage">

	<div class="row">
		<div class="col-md-7">
			
			<h2>Tweets For You</h2>

			<?php displayTweets('isFollowing'); ?>

		</div>
		<div class="col-md-5">
			
			<?php displaySearch(); ?>

			<hr>

			<?php displayTweetBox(); ?>

		</div>
	</div>

</div>
