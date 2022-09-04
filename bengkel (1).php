<?php
require_once "method.php";
$bkl = new bengkel();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
   case 'GET':
         if(!empty($_GET["id_kategori"]))
         {
            $id_kategori=intval($_GET["id_kategori"]);
            $bkl->get_bkl($id_kategori);
         }
         else
         {
            $bkl->get_bkll();
         }
         break;
   default:
      // Invalid Request Method
         header("HTTP/1.0 405 Method Not Allowed");
         break;
      break;   

        }
        ?>
              