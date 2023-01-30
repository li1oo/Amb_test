<?php

$pdo = require('config.php');
class Migration_create_item_supplier
{

    public function up(){

        $request = 'CREATE TABLE IF NOT EXISTS `item_supplier`(
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `item_id` INT NOT NULL,
        `supplier_id` INT NOT NULL,
        `price` INT NOT NULL,
        `delivery_time` INT NOT NULL,
        FOREIGN KEY (`item_id`) REFERENCES `item`(`id`) ON DELETE CASCADE,
        FOREIGN KEY (`supplier_id`) REFERENCES `supplier`(`id`) ON DELETE CASCADE,
        )';
        pdo->query($request);
    }

    public function down(){
        $request = 'DROP TABLE `item_supplier`';
        pdo->query($request);
    }
}