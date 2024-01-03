
<?php 

include("config.php");
if(isset($_POST['prenom'])){// upload comme j'avais pas dans mes varibales!!!!! merci xavier
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $insert = "INSERT INTO contact (prenom, nom, phone, email , message) VALUES ('$prenom','$nom','$phone','$email','$message')";
    if(mysqli_query($conn, $insert)){
        header("location: index.html");
    }

}

?>