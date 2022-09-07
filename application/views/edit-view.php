<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    body {
  background: #f7f7f7;
}

.form-box {
  max-width: 500px;
  margin: auto;
  padding: 50px;
  background: #ffffff;
  border: 10px solid #f2f2f2;
}

h1, p {
  text-align: center;
}

input, textarea {
  width: 100%;
}
</style>

</head>
<body>
    <div class="form-box">
    <h1>Edit Product</h1>

    <form action="<?php echo base_url(); ?>crud/update/<?php echo $singleProduct->id ?>" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" type="text" name="name" value="<?php echo $singleProduct->name; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="price" type="text" name="price" value="<?php echo $singleProduct->price; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="quantity" type="text" name="quantity" value="<?php echo $singleProduct->quantity ;?>">
        </div>
   
        <input class="btn btn-primary" type="submit" value="Update" name="edit" />
        </div>
    </form>
    </div>
    
<?php

// print_r($singleProduct);

?>



</body>
</html>