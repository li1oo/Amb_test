<?php



function getItemSuppliers($item_id){
    $pdo = require '../migrations/config.php';
    $stmt = $pdo->prepare('SELECT `item_supplier`.`id`, `item_id`, `supplier_id`, `price`, `delivery_time`, `item`.`title`, `supplier`.`name`
FROM `item_supplier`, `item`, `supplier` WHERE `item_id` = ? AND `item`.`id` = `item_supplier`.`item_id` AND `supplier`.`id` = `item_supplier`.`supplier_id`; ');
    $stmt->execute(array($item_id));
    $objects['objects'] = [];
    while ($row = $stmt->fetch())
    {
        $objects['objects'][] = ($row);
    }
    echo json_encode($objects);

}
getItemSuppliers(1);
