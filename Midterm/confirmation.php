<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Haiku!</title>
<link rel="stylesheet" type="text/css" href="styles.css"/>
</head>

<body>
    
    
<div id="all">
<h1>Haiku Database</h1>
<div id="haikus">
<div class="haiku">
<p>

    <?php
    
    
    $author_Name=$_POST['author_Name'];
    $Title=$_POST['Title'];
    $Message=$_POST['Message'];

    
    $insert_Query="INSERT INTO `haiku`(`author_Name`, `Title`, `Message`)
    VALUES
    ('$author_Name','$Title','$Message')";
   
      
    $conn= mysqli_connect("localhost","abdallakabdulaal","Money1998$");


if(!$conn){
    die("couldnt connect to database");
}


mysqli_select_db($conn,"abdallakabdulaal");
    
    
$insert_result = mysqli_query($conn,$insert_Query);
 if (!$insert_result){
     echo("couldnt insert into table");
     
}

mysqli_close($conn);
    ?>
</p>
    
    <h3>
    <a href="index.php"> click to go back</a>
    </h3>
</div>
</div>
<hr />
<div id="newHaiku">
<h2>Successfully Added !</h2>
</div>
</div>
</body>
</html>
