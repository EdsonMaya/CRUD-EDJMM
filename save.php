<?php 

include("db.php");

if(isset($_POST['save'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $name=$_POST['name'];  //guardo cada dato ingredado
    $address=$_POST['address'];
    $age=$_POST['age']; 
    $mail=$_POST['mail'];
    $breed=$_POST['breed'];
    $comment=$_POST['comment'];

    $query="INSERT INTO dogs(name, address, age, mail, breed,comment) VALUES ('$name', '$address', '$age', '$mail', '$breed', '$comment')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail");
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: index.php");
}

?>