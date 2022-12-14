<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    
    <title>Document</title>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body>
    <div class="jumbotron">
        <h1 align="center">CRUD using API</h1>
    </div>
    <div class="container">
        <div class="clear-fix">
            <h3 style="float:left">All Products</h3>
            <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal" style="float:right">Add Product </a>
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

            <?php
                foreach($product_details as $products):
            ?>
                <tr>
                    <td><?php echo $products->name ?></td>
                    <td><?php echo $products->price ?></td>
                    <td><?php echo $products->quantity ?></td>
        
                    <td> 
                        <a href="<?php echo base_url(); ?>crud/editProduct/<?php echo $products->id ?>" class="btn btn-success">Edit</a> 
                        <a href="<?php echo base_url(); ?>crud/deleteProduct/<?php echo $products->id ?>" class="btn btn-danger">Delete</a> 
                    </td>
                </tr>

            
            <?php
                endforeach;
            ?>

               
            </tbody>
        </table>
    </div>
    <pre>
<?php
// print_r($product_details);

?>
</pre>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo base_url(); ?>crud/addProduct" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter Name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" placeholder="Enter Price" class="form-control">
                </div>                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="insert" value="Add Product" class="btn btn-info">
            </div>
            </form>
            </div>
        </div>
    </div>


<?php

// echo "ewrthjgkgerwfgdf".$this->session->flashdata('error');

?>
<?php if($this->session->flashdata('error')): ?>

<div align="center" style="color:#fff" class="bg-danger">
<?php echo  $this->session->flashdata('error'); ?>
</div>         

<?php endif; ?>




<?php if($this->session->flashdata('Deleted')): ?>

<div align="center" style="color:#fff" class="bg-success">
<?php echo  $this->session->flashdata('Deleted'); ?>
</div>         

<?php endif; ?>




<?php

// echo "ewrthjgkgerwfgdf".$this->session->flashdata('error');

?>
<?php if($this->session->flashdata('Inserted')): ?>

<div align="center" style="color:#fff" class="bg-success">
<?php echo  $this->session->flashdata('Inserted'); ?>
</div>         

<?php endif; ?>







<?php if($this->session->flashdata('Updated')): ?>

<div align="center" style="color:#fff" class="bg-success">
<?php echo  $this->session->flashdata('Updated'); ?>
</div>         

<?php endif; ?>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>