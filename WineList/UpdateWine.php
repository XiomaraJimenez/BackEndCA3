<?php
include 'library/DBConnection.php';


$sql = "SELECT * FROM Wine WHERE id=".$_GET['id'];

$result = $conn->query($sql);


if($result->num_rows==0){
    header("Location: index.php");
}

$row=$result->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
<title>Update Wine</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'NavBar.php' ?>
    <div class="container">
        
        <h1>Update Wine</h1>
        <form action="EditWine.php" method="POST">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
            <div class="mb-3">
                <label for="name" class="form-label">Wine Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="<?= $row['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">country</label>
                <input type="text" class="form-control" id="country" name="country" aria-describedby="countryHelp" value="<?= $row['country']?>">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" name="type" aria-describedby="typeHelp" value="<?=$row['type'] ?>">
            </div>
            <div class="mb-3">
                <label for="cost" class="form-label">cost</label>
                <input type="text" class="form-control" id="cost" name="cost" aria-describedby="costHelp" value="<?= $row['cost']?>">
            </div>
            <div class="mb-3">
                <label for="year_date" class="form-label">year Date</label>
                <input type="text" class="form-control" id="year_date" name="year_date" aria-describedby="year_dateHelp" value="<?= $row['year_date']?>">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    

   
</body>
</html>