<?php
include("db.php");
$name = '';
$address= '';
$phone = '';
$mail= '';
$comment = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM users WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $address = $row['address'];
    $age = $row['age'];
    $mail = $row['mail'];
    $comment = $row['comment'];
    $breed = $row['breed'];
  }
}
if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $name= $_POST['name'];
  $address= $_POST['address'];
  $age = $row['age'];
  $mail = $_POST['mail'];
  $comment= $_POST['comment'];
  $breed = $row['breed'];
  $query = "UPDATE users set name = '$name', address = '$address', age = '$age', mail = '$mail', breed = '$breed', comment= '$comment' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}
?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
        <p>
                                            <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="adress" class="form-control" placeholder="Adress" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="age" class="form-control" placeholder="age" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="mail" class="form-control" placeholder="E-Mail" autofocus>
                                        </p>
                                        
                                            <input type="text" name="breed" class="form-control" placeholder="breed" autofocus>
                                        </p>

                                    </div>
        <div class="form-group">
        <textarea name="comment" class="form-control" cols="30" rows="10"><?php echo $comment;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>