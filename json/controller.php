<?php 

    include '../db/database.php';

    header('Çontent-Type: application/json');
    echo json_encode($albums);