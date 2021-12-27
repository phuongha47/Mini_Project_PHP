
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      <?php include "public/css/add.css" ?>
    </style>
    <p class="back_post"> <a href="?controller=post&action=post_admin">Back</a></p>
    <h1 class="text-center  my-5  py-2">Add new post</h1>
    <div class ="container">
        <div class = "row">
            <div class="col-sm-8 push-sm-2">
                    <form  class="p-5 border mb-5" method="POST" action="?controller=post&action=store">
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text"  maxlength='100' required name ="title" id="Title" >
                    
                </div>
                <div class="form-group">
                    <label for="Post">Post</label>
                    <input type="text" required name="post" id="Post">
                </div>
                <button type="submit" name="submit" type="button" class="btn btn-outline-primary  ">submit</button>
                
            </form>
            </div>
        </div>
    </div>
    
