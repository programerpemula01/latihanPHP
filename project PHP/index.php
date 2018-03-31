<?php
include "include/head.php";
include "include/config.php";
?>
<body>
<?php  
include "include/menu.php"
?>

          <article>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                <?php 
                if(isset($_GET["OurServices"])){include "pages/OurServices.php";}
                elseif(isset($_GET["Product"])){include "pages/Product.php";}
                elseif(isset($_GET["ContactUs"])){include "pages/ContactUs.php";}
                else{include "pages/home.php";}
                ?>  
                </div> 
              </div> 
            </div>   
          </article><!-- end of article -->
<?php  
include "include/footer.php"
?>
     
  </body>
</html>