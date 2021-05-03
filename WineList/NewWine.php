
<!DOCTYPE html>
<html>
<head>
<title>Insert Wine</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'NavBar.php' ?>
    <div class="container">
        
        <h1>Insert Wine</h1>
        <form action="InsertWine.php" class="needs-validatio" novalidate method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Wine Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="<?php if(isset($name)){ echo $name;}  ?>" >
                <!-- show error to user  -->
                <span class="text-danger">
                    <?= isset($error['name']) ? $error['name'] : ''?> 
                </span>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">country</label>
                <input type="text" class="form-control" id="country" name="country" value="<?= (isset($country)) ? $country : NULL ?>" aria-describedby="countryHelp">
                <span class="text-danger"><?= isset($error['country']) ? $error['country'] : '' ?> </span>
           </div>
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" name="type" value="<?= (isset($type))? $type : NULL ?>" aria-describedby="typeHelp">
                <span class="text-danger"><?= isset($error['type']) ? $error['type'] : '' ?> </span>
           </div>
            <div class="mb-3">
                <label for="cost" class="form-label">cost</label>
                <input type="text" class="form-control" id="cost" name="cost" value="<?= (isset($cost))? $cost : NULL ?>" aria-describedby="costHelp">
                <span class="text-danger"><?= isset($error['cost']) ? $error['cost'] : '' ?> </span>
           </div>
            <div class="mb-3">
                <label for="year_date" class="form-label">year Date</label>
                <input type="text" class="form-control" id="year_date" name="year_date" value="<?= (isset($year_date))? $year_date : NULL ?>" aria-describedby="year_dateHelp">
                <span class="text-danger"><?= isset($error['year_date']) ? $error['year_date'] : '' ?> </span>
           </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    

   
</body>
</html>