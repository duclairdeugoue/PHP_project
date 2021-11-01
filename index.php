<?php  include('./includes/db.php'); 
    if(isset($_POST['submit'])){
        $name  = $_POST['name'];
        $email  = $_POST['email'];
        $age  = $_POST['age'];

        $sql = "INSERT INTO students(name,email,age) VALUES ('$name','$email','$age')";

        $result = mysqli_query($con,$sql);

        if(!$result){
            echo 'Please checkk your query';
        }
        else{
            echo "Record was succesfully enttered into the database";
        }
    }
?>
<html lang="en">
<head>
    <?php include 'includes/header.php' ?>
    <title>Home</title>
</head>

<body>
    <h1 class="text-center">PHP Project</h1>
    <div class="container ">
        <div class="row ">
            <div class="col-sm-6 mx-auto">
                <form action="" method="post" class="form p-5">
                    <div class="form-group p-2">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group p-2">
                        <label for="Email">Email</label>
                        <input type="mail" class="form-control" name="email">
                    </div>
                    <div class="form-group p-2">
                        <label for="Age">Age</label>
                        <input type="text" class="form-control" name="age">
                    </div>
                    <div class="form-group d-flex justify-content-around">
                    <input  type="submit" class="btn btn-primary  m-2 form-control" value="Add New Student" name="submit">
                    <button class="btn btn-danger m-2">Cancel</button>
                    </div>
                    
                </form>
            </div>

        </div>

    </div>

</body>

</html>