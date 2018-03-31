<?php

$query = mysqli_query($connection, "SELECT * FROM ro_article WHERE category='Product'");

?> 
        <?php if(mysqli_num_rows($query)>0){?>
            <?php while($row_query= mysqli_fetch_array($query)){?>
        <h3> <?php echo $row_query["title"]?>      </h3>
                  <img src="images/<?php echo $row_query["image"]?>" class="img-responsive">
                  <p><?php echo $row_query["description"]?></p>
             <?php }?>    
        <?php }?>      