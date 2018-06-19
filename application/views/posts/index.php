<h2 class="header"><?= $title ?></h2>	

<div class="post-body">
<?php foreach ($posts as $posts ) : ?>

	<h3 class="title-head"><?php echo $posts['title']; ?></h3><hr>
	<h4><?php echo $posts['stitle']; ?></h4>
	<small class="post-date"> Posted on: <?php echo $posts['created_at']; ?> </small>
	<?php echo $posts['body']; ?><br>
	<a class="btn btn-default" id="sbmt-btn" href="<?php echo site_url('/posts/' .$posts['slug']);  ?>">Read More</a>

<?php endforeach; ?>
</div>