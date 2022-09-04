<?php
require_once "koneksi.php";
class bengkel 
{

    public  function get_bkll()
   {
      global $mysqli;
      $query="SELECT * FROM dbservis";
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
    

    public function get_bkl($id_kategori=0)
    {
       global $mysqli;
       //echo $id_kategori;
       $query="SELECT * FROM dbservis";
       if($id_kategori != 0)
       {
          $query.=" WHERE id_kategori=".$id_kategori." ";
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