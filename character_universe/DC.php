<?php
include('database.php');
include('Navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🗂</text></svg>">
  <title>Character universe</title>
  <link rel="stylesheet" href="global-styles.css">
  <link rel="stylesheet" href="webcss.css">
</head>
<body>
<center><h1 style="color:white">DC Universe</h1></center>
<article>
            <?php
                  $query = "SELECT * FROM characters where universe='DC'";
                  $result = mysqli_query($con, $query);
            ?>
                  <div id='stucard' class ="row">
            <?php
                    while($rows = mysqli_fetch_array($result))  
                    {?>
                                  <div class="flip-card">
                                      <div class="flip-card-inner">
                                        <a href="details.php?something=something&name=<?php echo $rows['name']?>&id=<?php echo $rows['id']?>&page=<?php echo "DC.php"?>">
                                          <div class="flip-card-front">
                                            <img src="<?php echo $rows['image1']?>" alt="Avatar" style="width:450px;height:450px">
                                          </div>
                                          <div class="flip-card-back">
                                            <img src="<?php echo $rows['image2']?>" alt="Avatar" style="width:450px;height:450px">
                                          </div>
                                      </div>
                                      
                                    <br><br><br>
                                    
                                   
                                </div>
                      <?php
                    }?>
</article>
</body>
</html>
