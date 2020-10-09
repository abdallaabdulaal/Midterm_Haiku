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
 $conn= mysqli_connect("localhost","abdallakabdulaal","Money1998$");


if(!$conn){
    die("couldnt connect to database");
}

mysqli_select_db($conn,"abdallakabdulaal");
    
$selectQuery="SELECT * FROM `haiku`";
$selectResults= mysqli_query($conn, $selectQuery);
    

    
if (!$selectResults){
     echo("couldnt select from table");
}
?>
    </p>
    
        <?php
while ($row = mysqli_fetch_assoc($selectResults)){

        ?>
             <h2> <?php echo($row['Title']);?> BY &#40; <?php echo($row['author_Name']);?>&#41; </h2>
   
    <P>
    <?php echo($row['Message']);?>
    </P>
             
  <?php }
         ?> 
    <br>
    
    
   
</div>
</div>
<hr />
<div id="newHaiku">
<h2>Add your own!</h2>
       <form action="confirmation.php" method="post">
	<p>
<label for="author_Name">Authors Name</label>
<input type="text" name="author_Name" id="author_Name" required>
        </p>
        
        <p>   
		<label for="Title">Title</label>
        <input type="text" name="Title" id="Title" required>
        
           </p>
        <p>
            <label for="Message">Message</label>
           <textarea name="Message" id="Message" cols="45" rows="5" required=""></textarea>
           </p>
       
        
    
	  
	<input type="submit">
    </form>
</div>
</div>
</body>
</html>
