<?php
class PostModel extends MasterModel
{
    const TABLE ='post';
    public function getAll()
    {
        return parent::get_all_from(self::TABLE);
    }

    
    public function getPost($id)
    {
        return parent::get_By_Id(self::TABLE,$id);
    }

    public function delete_by_id($id)
    {
        return parent::delete(self::TABLE, 'id', $id);
    }
    

    public static function updatePost($id, $title, $post){
        $db= Database::connect();
        $sql = "UPDATE self::TABLE SET title='$title', post='$post' WHERE id=$id";
        return $db->query($sql);}

    
    public function addPost ($title, $post){
        $db= Database::connect();   
        // Check connection
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        else {
            echo "Connect ok";
        }
        $sql = "INSERT INTO self::TABLE (title, post)
        VALUES ('$title', '$post')";
        return $db->query($sql);
    }
        

    
    
   
    
} 