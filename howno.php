<?php
$dbname = "essa";
$servername = "localhost";
$username = "root";
$password = "";



$conn = new mysqli($servername, $username, $password,$dbname);



if(isset($_POST['submit'])){
    if(!empty($_POST['id']) && ($_POST['wart_min']) && ($_POST['wart_max'])){
        $id = $_REQUEST['id'];
        $wart_min = $_REQUEST['wart_min'];
        $wart_max = $_REQUEST['wart_max'];
        $qr1 = $conn->prepare("INSERT INTO `bmi` (`id`, `wart_min`, `wart_max`) VALUES (?, ?, ?);");
        $qr1->bind_param("iii",$id,$wart_min,$wart_max);
        $qr1->execute();

    }
}


    
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


mysqli_close($conn);
?>

<form action="howno.php" method="POST">
            id: <input type="number"  name="id">
            wart_min: <input type="text"  name="wart_min">
            wart_max: <input type="text"  name="wart_max">
            <button name="submit"type="submit">DODAJ</button>
        </form>
