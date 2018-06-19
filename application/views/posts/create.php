<h2 class="header"><?= $title; ?></h2>
<?php echo validation_errors();  ?>
<div class="post-body">
<?php echo form_open('posts/create'); ?>
<div class="form-group">
<label type="text">Artifex Name</label><br>
<input type="text" name="title" class="form-control" id="art-name"><br>
</div>
<div class="form-group">
<label type="text">Artifex Content</label><br>
<textarea class="form-control" name="body" placeholder="Get Artifex" id="textarea"></textarea>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>