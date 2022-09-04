<?php
require_once "methodjenisperbaikan.php";
$bkl = new perbaikan();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
   case 'GET':
         if(!empty($_GET["id_jenis"]))
         {
            $id_jenis=intval($_GET["id_jenis"]);
            $bkl->get_bkl($id_jenis);
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
              