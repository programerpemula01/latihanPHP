<?php

//Input Data
if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $text = $_POST["text"];
    mysqli_query($connection,"INSERT INTO ro_article_table VALUES('','$nama','$email','$text')");
    header("location:index.php?ContactUs");
}


?>
            <form action="" method="post">
              <div class="form-group">
                <label for="exampleInputName">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputName" name="nama" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Message</label>
                <textarea class="form-control" rows="3" name="text" placeholder="Text"></textarea>
              </div>
              
              <input type="submit" name="submit" class="btn btn-default" value="Send Message">
              <button type="reset" class="btn btn-default">Reset</button>
            </form>