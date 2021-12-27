
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
      <?php include "public/css/update.css" ?>
</style>
<p class="back_post"> <a href="?controller=post&action=viewById&id=<?php echo $id?>">Back</a></p>
   <h1 class="text-center  my-5  py-3">Update </h1>
    <div class ="container">
        <div class = "row">
            <div class="col-8 mx-auto">
                    <form  class="p-5 border mb-5" method="POST" action="?controller=post&action=edit&id=<?php echo $id?>">
                <div class="form-group">
                <?php foreach($post as $row) {
                    $post =$row['post'];
                    $title = $row['title'];
                } ?>
                    <label for="Title">Title</label>
                    <input type="text" required name ="title" id="Title"  value="<?php echo $title; ?>">
                </div>
                <div class="form-group">
                    <label for="Post">Post</label>
                    <input type="text" required name="post" id="Post" value="<?php echo $post?>;">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">submit</button>
                    
            </form>
            </div>
        </div>
    </div>
    
