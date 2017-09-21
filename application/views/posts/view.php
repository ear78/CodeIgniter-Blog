<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>

 <?php echo form_open('posts/delete/'.$post['id']); ?>
    <input class="btn btn-danger" type="submit" name="Delete" value="Delete">
</form>
