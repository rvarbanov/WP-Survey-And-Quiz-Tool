<?php

global $wpdb;

$order = split(',', $_GET['order']);
array_pop($order);
echo '<pre>'; var_dump($order); echo '</pre>';