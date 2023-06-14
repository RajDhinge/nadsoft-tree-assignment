<?php
require_once '../Model/Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();
    $db->initialize();

    $selname = $_POST['selname'];
    $name = $_POST['name'];

    $inserted = $db->insertMember($name, $selname);

    if ($inserted) {
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 201));
    }
}
?>
