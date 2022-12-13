<?php

$connect = mysqli_connect('localhost', 'root', '', 'cart');
$query = 'SELECT * FROM products ORDERY by id ASC';
$result = mysqli_query($connect, query);

if ($result){
    if(mysqli_num_rows($result)>0){
        while($product = myswli_fetch_assoc($result)){
            print_r($product)
        }
    }
}