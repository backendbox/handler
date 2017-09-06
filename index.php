<?php
require 'vendor/autoload.php';

use Backendbox\Handler\Handler;

$payload = '{"entry":[{"changes":[{"field":"feed","value":{"parent_id":"1179870245432830_1337084153044771","sender_name":"Ems Tuyềns","sender_id":892149934268234,"post_id":"1179870245432830_1337084153044771","verb":"add","item":"like","created_time":1504614185}}],"id":"1179870245432830","time":1504614186},{"changes":[{"field":"feed","value":{"reaction_type":"like","parent_id":"1179870245432830_1337084153044771","sender_name":"Em\'s Tuyền\'s","sender_id":892149934268234,"post_id":"1179870245432830_1337084153044771","verb":"add","item":"reaction","created_time":1504614185}}],"id":"1179870245432830","time":1504614186}],"object":"page"}';

$hello = new Handler($payload, "fb");
$hello->world();