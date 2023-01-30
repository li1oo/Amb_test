<?php

$pdo = require('config.php');
class Migration_create_item
{

    public function up(){

        $request = 'CREATE TABLE IF NOT EXISTS `item`(
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `title` VARACHAR(255) NOT NULL,
        )';
        pdo->query($request);
    }

    public function down(){
        $request = 'DROP TABLE `item`';
        pdo->query($request);
    }
}