<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      <?php include "public/css/post_detail.css" ?>
    </style>
</head>
<body >
<p class="back_post"> <a href="?controller=post&action=post_admin">Back</a></p>

    <?php foreach($post as $row) {
            $post =$row['post'];
            $title = $row['title'];
        } ?>
    <div class= "bg_con">
        <h1> <?php echo $title ?></h1>
        <hr>
        <div><?php echo $post ?></div>
    </div>
    <br><br><br>
    <div class="button">
                    <td  type="button" ><a class="delete_button" href="?controller=post&action=delete&id=<?php echo $row['id']?>" onclick='return checkDelete()'>Delete</a></td>
                    <td ><a class="update_button" href="?controller=post&action=update&id=<?php echo $row['id']?>" >Update</a></td>
    </div>
</body>
</html>