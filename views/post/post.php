<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <style>
      <?php include "public/css/index.css" ?>
      <?php include "public/css/home.css" ?>
    </style>
    <style type="text/css">
        A:link { COLOR: black; TEXT-DECORATION: none;  }
        A:visited { COLOR: black; TEXT-DECORATION: none;  }
        A:active { COLOR: black; TEXT-DECORATION: none }
        A:hover { COLOR: purple; TEXT-DECORATION: none; }
    </style>
</head>
<body>
<!-- header -->
<?php require "views/client/pages/header.php"?>
<div class="bg">
<div class="bg_con">
    <button type="button" class="add_right"><a href="?controller=post&action=add" >Add</a></button>
    <div >

            <?php if (!empty($list)): ?>
                <?php foreach ($list as $row):?>
                <h1 ><a href="?controller=post&action=viewByIdAdmin&id=<?php echo $row['id']?>"><?php echo $row['title']?></a></h1>
                <p><?php $string = strip_tags($row['post']);
                        if (strlen($string) > 500) {

                            // truncate string
                            $stringCut = substr($string, 0, 800);
                            $endPoint = strrpos($stringCut, ' ');

                            //if the string doesn't contain any space then it will cut without word basis.
                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            echo $string; ?>
                            <a href="?controller=post&action=viewByIdAdmin&id=<?php echo $row['id']?>" style="color:blue; text-decoration: underline;">Read more</a>

                        <?php }
                            else {echo $string;}?>
                            
                            </p>
                
                <div>
                    <td  type="button" ><a class="delete_button" href="?controller=post&action=delete&id=<?php echo $row['id']?>" onclick='return checkDelete()'>Delete</a></td>
                    <td ><a class="update_button" href="?controller=post&action=update&id=<?php echo $row['id']?>" >Update</a></td>
                </div>
                
                <?php endforeach?>
            <?php endif ?>
    
    </div>
    </div>
</div>
<?php require "views/client/pages/footer.php"?>

</body>
</html>
<script>
    function checkDelete(){
        return confirm("Are you sure ?");
    }
</script>



