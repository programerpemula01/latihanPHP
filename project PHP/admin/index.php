<?php
ob_start();
session_start();
if(!isset($_SESSION['admin_id']))header("location:login.php");

include "include/head.php";
include "../include/config.php";
?>
<body>
    <?php  
    include "include/menu.php";
    ?>
        <article>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                <?php 
                if(isset($_GET["pages"])){include "pages.php";}
                elseif(isset($_GET["contact"])){include "contact.php";}
                else{include "pages.php";}
                ?>  
                </div> 
              </div> 
            </div>   
          </article><!-- end of article -->
    
    <?php  
    include "include/footer.php";
    ?>
</body>
</html>
<?php
	mysqli_close($connection);
    ob_end_flush();
?>
