<?php include('db.php'); ?>

    <?php include('includes/header.php'); ?>

        <main class="container p-4">
            <div class="row">

                <div class="col-md-4">

                    <?php if(isset ($_SESSION['message'])) {?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?=$_SESSION['message'] ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <!--mensaje de alerta con bootstrap-->
                        <?php session_unset(); } ?>
                            <!--cierra el mesaje de alerta al refrescar la página-->

                            <div class="card card-body">

                                <form action="save.php" method="POST">

                                    <div class="form-group">

                                        <p>
                                            <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="address" class="form-control" placeholder="Address" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="age" class="form-control" placeholder="age" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="mail" class="form-control" placeholder="E-Mail" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="breed" class="form-control" placeholder="breed" autofocus>
                                        </p>

                                    </div>
                                    <div class="form-group">
                                        <textarea name="comment" rows="3" class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-success btn block" name='save' value="Save">
                                </form>
                            </div>
                </div>

                <div class="col-md-8">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>age</th>
                                <th>E-Mail</th>
                                <th>Comment</th>
                                <th>Breed</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM dogs";
                        $result_usuario = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <!--recorro mi tabla usuario-->
                                <tr>
                                    <td>
                                        <?php echo $row['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['address']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['age']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['mail']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['breed']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['comment']; ?>
                                    </td>
                                    <td><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                                        <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

        <?php include('includes/footer.php'); ?>
