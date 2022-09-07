<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="jumbotron">
        <h1 align="center">CRUD using API</h1>
    </div>
    <div class="container">
        <div class="clear-fix">
            <h3 style="float:left">All Products</h3>
            <a href="" class="btn btn-primary" style="float:right">Add Product </a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>Mango</td>
                    <td>200</td>
                    <td>20</td>
                    <td> 
                        <a href="#" class="btn btn-success">Edit</a> 
                        <a href="#" class="btn btn-danger">Delete</a> 
                    </td>
                </tr>

                <tr>
                    <td>Mango</td>
                    <td>200</td>
                    <td>20</td>
                    <td> 
                        <a href="#" class="btn btn-success">Edit</a> 
                        <a href="#" class="btn btn-danger">Delete</a> 
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</body>
</html>