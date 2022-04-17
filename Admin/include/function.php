<?php

    require('Query.php');

    function addProduct($data) {

        // validate data using common function

        // add data to DB using Query function (add())
        
        $query = new Query();
        return $query->add('products', $data);
    }