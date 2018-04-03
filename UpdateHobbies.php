<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>
        <?php
//connection
        $dsn = "mysql:host=localhost;dbname=mylibrary"  ;
        $user = "root";
        $password = null;
        $options = null;
try {
      $conn = new PDO($dsn, $user, $password, $options);
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$updated = $conn->exec("UPDATE hobbies set hobby='Watching rugby' WHERE ID = 27");

if($updated){

echo "Records updated successfully";
}
echo "<h1>Hobby Information</h1>";

    $statement = $conn->query(
	"SELECT * FROM hobbies");	
    
foreach ($statement as $row) {
	echo $row[0] . " " . $row[1] ." ". $row[2] ." ". $row[3] . "<br>";
}

}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
 		

?>
</body>

</html>