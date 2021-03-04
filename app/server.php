<?php 

require_once __DIR__ . '/../database/database.php';


if (array_key_exists ( 'genre' , $_GET ) && !empty($_GET['genre'])) {
        $querySearch = $_GET['genre'];
        foreach ($discs as $key => $value) {
            if ($value['genre'] != $querySearch) {
                unset($discs[$key]);
            }
        }
    }

 if (array_key_exists ( 'genre' , $_GET ) && empty($_GET['genre']) || count($discs) == 0) {
     http_response_code(400);
     exit();
 }
 header('Content-Type: application/json');
 $json = json_encode($discs);
 echo $json;




/* header('Content-Type: application/json');
echo json_encode($discs); */