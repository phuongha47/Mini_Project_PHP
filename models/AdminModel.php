<?php 
class AdminModel extends MasterModel
{
    const TABLE ='admin'; 
    public function login($username){
        $db= Database::connect();
        $sql = "SELECT * FROM self::TABLE WHERE  adminName='{$username}'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result =$stmt->fetchAll(PDO:: FETCH_ASSOC);
        $stmt->closeCursor();
        
        return $result;
    }

    public function login_Admin(){
        $adminUser = $_POST["username"];
        $adminPass= $_POST["password"];
        $db= Database::connect();
        $sql = "SELECT * FROM admin WHERE  adminName='{$adminUser}'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result =$stmt->fetchAll(PDO:: FETCH_ASSOC);
        $stmt->closeCursor();
        foreach($result as $row) {
            $username =$row['adminName'];
            $pass = $row['adminPass'];            
            //hash password           
            $password_hash =  md5($adminPass);
            if ($password_hash == $pass){
                return true; }
            else {
                return false;
                    }  
      
   }
   
}

}