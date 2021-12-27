<style>
      <?php include "public/css/header.css" ?>
</style>
<header class="header section-padding">
            <a class ="header__logo" href="." >BENTORY</a>
            <nav class= "header__nav"> 
                <ul >
                    <li class="active"><a href="." >ホーム</a></li>
                    <li><a href="#">Bentoryについて</a></li>
                    
                        <?php if (isset($_SESSION['profie'])):?>
                        <li><a href="?controller=post&action=post_admin">Post</a></li>
                        <li><a href="?controller=Admin&action=logout">Logout</a></li> 

    
                        <?php else: ?>
                            <li><a href="?controller=post&action=view">Post</a></li>
                            <li><a href="?controller=Admin&action=login">Login</a></li>
                            <?php endif;?> 
                    
                </ul>                    
            </nav>
</header>

</html>


