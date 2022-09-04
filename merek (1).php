<?php
require_once "methodmerek.php";
$bkl = new merek();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
   case 'GET':
         if(!empty($_GET["id"]))
         {
            $id=intval($_GET["id"]);
            $bkl->get_bkl($id);
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
              