<?php

    require('function.php');

    if(isset($_POST['add_product'])) {

        // unset($_POST['add_product']);

        $data = array(
            'name' => addslashes($_POST['name']),
            'price' => addslashes($_POST['price']),
        );
        
        if(addProduct($data))
            header('Location: ../index.php');
        else
            die('Error in add');
    }