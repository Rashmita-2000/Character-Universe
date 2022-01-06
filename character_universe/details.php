<?php
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet" href="global-styles.css">
<?php

if(@$_REQUEST['something']=="something"){
  $name= $_REQUEST['name'];
  $id =$_REQUEST['id'];
  $page =$_REQUEST['page'];
  $idquery="select * from `characters` where `id`='$id'";
  $queryres = mysqli_query($con, $idquery);
  $val=mysqli_fetch_array($queryres);
  $desc=$val['description'];
  $image=$val['image1'];
  $played_by=$val['played_by'];
  $uni_char=$val['uni_char'];
  ?><title><?php echo $uni_char;?></title><?php
?>
<html>
        <head>
              <center><h1><?php echo $uni_char ;?></h1></center>
              <body>
                      <img src='<?php echo $image ;?>' width=100%>
                          <div class="card text-center">
                          <div class="card-header">
                          <h5><?php echo $name ;?></h5>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Played by : <?php echo $played_by ;?></h5>
                            <p class="card-text"><?php echo $desc ;?></p>
                            <a href='<?php echo $page ;?>' class="btn btn-primary">Go Back</a>
                          </div>
                        </div>
<?php
}
?>