<?php
session_start();
require 'dbconfig.php';
?>
<?php
if (isset($_POST['username'])) {
    $select = mysqli_query($conn, "SELECT * FROM info WHERE username = '" . $_POST['username'] . "'");
    if (mysqli_num_rows($select) > 0) {
        echo 0;
    } else {
        $sql = "INSERT INTO info (id,username,score) VALUES ('','" . $_POST['username'] . "','0')";
        $_SESSION['currnetUsername'] = $_POST['username'];
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 1;
        }else{
            echo 0;
        }
   }
}
?>