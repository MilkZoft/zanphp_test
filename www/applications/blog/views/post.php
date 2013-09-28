<div class="posts">
	<div class="post">
		<h2><a href="<?php echo path("blog/slug/". $post["Slug"]);?>"><?=$post["Title"];?></a></h2>

		<p><small>Publicado por <a href="<?php echo path("blog/author/". $post["Author"]); ?>"><?=$post["Author"];?></a> el <?=$post["Date_Start"];?></small></p>

		<?=$post["Content"];?>
	</div>
</div>