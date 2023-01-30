<?php

$pdo = require('config.php');
class Migration_create_supplier
{

    public function up(){

        $request = 'CREATE TABLE IF NOT EXISTS `supplier`(
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `name` VARACHAR(255) NOT NULL,
        )';
        pdo->query($request);
    }

    public function down(){
        $request = 'DROP TABLE `item`';
        pdo->query($request);
    }
}