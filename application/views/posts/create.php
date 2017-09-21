<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input name="title" type="text" class="form-control" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control" placeholder="Add Blog Post..."></textarea>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>


</form>
