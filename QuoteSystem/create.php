<?php
require 'Core/innit.php';

if(isset($_POST['create'])){
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Product = $_POST['Product'];
    $Price = $_POST['Price'];
    $TimeFrame = $_POST['TimeFrame'];

    $createOrder = $orders -> Create($Name,$Surname,$Product,$Price,$TimeFrame);
    header("Refresh:0");
}
?>

<div class = "container">
    <div class = "form">
        <div class = form-header>
            <h2>Create New Order<h2>
        </div>
        <div class = form-body>
            
            <form method = "post">
                <div class="form-group">
                    <label for ="Name" >Name</label><br>
                    <input type = "text" name = "Name" id = "Name" class = "form-control">
                </div>
                <div class="form-group">
                    <label for ="Surname" >Surname</label><br>
                    <input type = "text" name = "Surname" id = "Surname" class = "form-control">
                </div>
                <div class="form-group">
                    <label for ="Product" >Product</label><br>
                    <input type = "text" name = "Product" id = "Product" class = "form-control">
                </div>
                <div class="form-group">
                    <label for ="Price" >Price</label><br>
                    <input type = "text" name = "Price" id = "Price" class = "form-control">
                </div>
                <div class="form-group">
                    <label for ="TimeFrame" >TimeFrame</label><br>
                    <input type = "text" name = "TimeFrame" id = "TimeFrame" class = "form-control">
                </div>

                <div class = "form-group">
                    <input type = "submit" value = "Place Order" name = "create">
                </div>


    </div> 
        <a href="home.php">Return to Home Page</a> <br>
        <a href="read.php">   View Orders</a>
    </div?
