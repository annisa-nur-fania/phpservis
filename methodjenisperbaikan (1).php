<?php
require_once "koneksi.php";
class perbaikan 
{

    public  function get_bkll()
   {
      global $mysqli;
      $query="SELECT * FROM dbjenisperbaikan";
      $data=array();
      $result=$mysqli->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response= $data;
      header('Content-Type: application/json');
      echo json_encode($response);
   }
    

    public function get_bkl($id_jenis=0)
    {
       global $mysqli;
       // echo $id;
       $query="SELECT * FROM dbjenisperbaikan";
       if($id_jenis != 0)
       {
          $query.=" WHERE id_jenis=".$id_jenis." ";
       }
       $data=array();
       $result=$mysqli->query($query);
       while($row=mysqli_fetch_object($result))
       {
          $data[]=$row;
       }
       $response= $data;
       header('Content-Type: application/json');
       echo json_encode($response);
         
    }    

}
 
?>    