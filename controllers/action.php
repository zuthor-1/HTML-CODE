<html>
    <head><title>action</title></head>
    <body>
        <?php 
         

         // server details for the connection on local host
         $servername="localhost";
         $username="root";
         $password="";
         $database="abhay"; // we can also specifie the db we want to use ...

         //create a connection
         $conn=mysqli_connect($servername,$username,$password,$database);// connecting the server via the given details 
         
         // die if fail
         if(!$conn)
         {
             die("sorry connection failed".mysqli_connect_error());// to show the error in connecting to server 
         }
         echo "<b>Connection was successfull</b>";


// creating a coustum database using queries... creating a db
/*
$servername="localhost";
$username="root";
$password="";
$database="abhay";

$conn=mysqli_connect($servername,$username,$password,$database);


$sql="INSERT INTO `abhay` (`name`,`email`) VALUE ('$a','$')";
*/


/*
$sql = "CREATE DATABASE abhay";  // sql query to execute on the server 
$result=mysqli_query($conn,$sql);  // to run query with to arguments server conn variable & query for that server 
if(!$result)
{
echo "<br>ans=";
echo var_dump($result);// result in bool value ie true and false 
echo mysqli_error($conn);//error in connection query  or error on the server after connecting to the server successfully
}
else{

    echo "<br>DB created successfully";
}
*/
/*
// creating a table in database...
$sql = "CREATE TABLE `abhay` (`id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`))";  // sql query to execute on the server 
$result=mysqli_query($conn,$sql);  // to run query with to arguments server conn variable & query for that server 

if(!$result)
{
echo "<br>ans=";
echo var_dump($result);// result in bool value ie true and false 
echo mysqli_error($conn);//error in connection query  or error on the server after connecting to the server successfully
}
else{

    echo "<br>table created successfully";
}
*/

// filling data inserting into database..
$a= $_POST["name"];
$b=$_POST["email"];
$sql= "INSERT INTO `abhay` (`name`,`email`) VALUES ('$a','$b')";
$result=mysqli_query($conn,$sql);  // to run query with to arguments server conn variable & query for that server 

if(!$result)
{
echo "<br>ans=";
echo var_dump($result);// result in bool value ie true and false 
echo mysqli_error($conn);//error in connection query  or error on the server after connecting to the server successfully
}
else{

    echo "<br>Record Submitted successfully";
}


        $myfile=fopen("new.txt","a+") or die("unable to store name");
        fwrite($myfile, $_POST["name"].",".$_POST["email"]."\n");
        fclose($myfile);
        require "fetch.php";
        ?>
       
                        
    </body>
</html>