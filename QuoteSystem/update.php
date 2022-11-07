<?php

require 'Core/innit.php';
$ID = $_GET['ID'];
$GetInfo = $orders -> GetInfo($ID);

if(isset($_POST['update'])){
    $Name =         htmlentities($_POST['Name']);
    $Surname =      htmlentities($_POST['Surname']);
    $Product =      htmlentities($_POST['Product']);
    $Price =        htmlentities($_POST['Price']);
    $TimeFrame =    htmlentities($_POST['TimeFrame']);

    $orders->updateOrders($Name,$Surname,$Product,$Price,$TimeFrame,$ID);
    header("Refresh:0");
}
?>

<div class = "container">
    <div class = "form">
        <div class = form-header>
            <h2>Edit Orders<h2>
        </div>
        <div class = form-body>
            
            <form method = "post">
                <div class="form-group">
                    <label for ="Name" >Name  </label><br>
                    <input  type = "text" name = "Name" id = "Name" value = "<?php echo $GetInfo->Name; ?>">
                </div>
                <div class="form-group">
                    <label for ="Surname" >Surname</label><br>
                    <input  type = "text" name = "Surname" id = "Surname" value = "<?php echo $GetInfo->Surname; ?>">
                </div>
                <div class="form-group">
                    <label for ="Product" >Product</label><br>
                    <input  type = "text" name = "Product" id = "Product" value = "<?php echo $GetInfo->Product; ?>">
                </div>
                <div class="form-group">
                    <label for ="Price" >Price</label><br>
                    <input  type = "text" name = "Price" id = "Price" value = "<?php echo $GetInfo->Price; ?>">
                </div>
                <div class="form-group">
                    <label for ="TimeFrame" >TimeFrame</label><br>
                    <input  type = "text" name = "TimeFrame" id = "TimeFrame" value = "<?php echo $GetInfo->TimeFrame; ?>">
                </div>

                <div class = "form-group">
                    <input type = "submit" value = "Edit Order" name = "update">
                </div>


    </div> 
    <a href="home.php">Return to Home Page</a> <br>
        <a href="read.php">   View Orders</a>
</div?
