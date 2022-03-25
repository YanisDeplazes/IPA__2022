<?php 

$settings = array('type' => 'projekte','title' => 'Projekte', 'isStatus' => true);
$loop = new TableLoop($settings);
echo $loop->get_table();

$settings = array('type' => 'servers','title' => 'Servers', 'isStatus' => true);
$loop = new TableLoop($settings);
echo $loop->get_table();