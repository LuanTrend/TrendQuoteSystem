<?php
require 'Core/innit.php';
$showOrder = $orders -> Read();
?>

<div class = "container">
    <div class = "card">
        <div class="card-header">
            <h2>All Orders</h2>
        </div>
        <div class="form-body">
            <table class = table-bordered>
                <tr>
                   <th>ID</th> 
                   <th>Name</th>
                   <th>Surname</th>
                   <th>Product</th>
                   <th>Price</th>
                   <th>Time Frame</th>
                   <th>Action</th>
                </tr>
                <?php foreach($showOrder as $showInfo): ?>
                <tr>
                    <td><?=$showInfo->ID;?></td>
                    <td><?=$showInfo->Name;?></td>
                    <td><?=$showInfo->Surname;?></td>
                    <td><?=$showInfo->Product;?></td>
                    <td><?=$showInfo->Price;?></td>
                    <td><?=$showInfo->TimeFrame;?></td>
                    <td>
                        <a href="update.php?ID=<?= $showInfo->ID ?>">Edit</a>
                        <a  href="delete.php?ID=<?= $showInfo->ID ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

    </div>
    <a href="home.php">Return to Home Page</a>
</div>