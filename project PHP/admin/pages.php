
        <table class="table table-striped">
        <?php 
        $query = mysqli_query($connection, "SELECT * FROM ro_article");
        if(mysqli_num_rows($query)>0){
        ?>
           
        <tr>
        	<td>No</td>
           	<td>Nama Halaman</td>
        	<td>Judul Halaman</td>
        	<td>Message</td>
        	<td>Gambar</td>
        </tr>
            <?php while($row_query= mysqli_fetch_array($query)){?>
        <tr>
        	<td><?php echo $row_query["id"]?></td>
           	<td><?php echo $row_query["category"]?></td>
        	<td><?php echo $row_query["title"]?></td>
        	<td><?php echo $row_query["description"]?></td>
        	<td><img src="../images/<?php echo $row_query["image"]?>" class="img-responsive"></td>
        </tr>
            <?php }?>    
        <?php }?> 
        </table>
    
   
