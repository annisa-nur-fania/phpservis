<?php
require_once "koneksi.php";
class merek 
{

    public  function get_bkll()
   {
      global $mysqli;
      $query="SELECT * FROM dbjenismerek";
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
    

    public function get_bkl($id=0)
    {
       global $mysqli;
       echo $id;
       $query="SELECT * FROM dbjenismerek";
       if($id != 0)
       {
          $query.=" WHERE id_jenis=".$id." ";
       }
       $data=array();
       $result=$mysqli->query($query);
       while($row=mysqli_fetch_object($result))
       {
          $data[]=$row;
       }
       $response=array(
                      'status' => 1,
                      'message' =>'Get Bengkel Successfully.',
                      'data' => $data
                   );
       header('Content-Type: application/json');
       echo json_encode($response);
         
    }    

}
 
?>    