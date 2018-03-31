<table class="table table-striped"">
 <?php 
        $query = mysqli_query($connection, "SELECT * FROM ro_article_table");
        if(mysqli_num_rows($query)>0){
        ?>
           
<tr>
	<td>No</td>
	<td>Nama</td>
	<td>Email</td>
	<td>Message</td>
</tr>
     <?php while($row_query= mysqli_fetch_array($query)){?>
<tr>
	<td><?php echo $row_query["id"]?></td>
	<td><?php echo $row_query["Nama"]?></td>
	<td><?php echo $row_query["Email"]?></td>
	<td><?php echo $row_query["Message"]?></td>
</tr>
    <?php }?>    
 <?php }?> 
</table>

