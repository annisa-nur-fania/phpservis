<?php
require_once "koneksi.php";
class api 
{

   $dftr = new apsi();
   $request_method=$_SERVER["REQUEST_METHOD"];
   switch ($request_method) {
      case 'GET':
            if(!empty($_GET["id"]))
            {
               $id=intval($_GET["id"]);
               $mhs->get_dftr($id);
            }
            else
            {
               $mhs->get_dftr();
            }
            break;
      default:
         // Invalid Request Method
            header("HTTP/1.0 405 Method Not Allowed");
            break;
         break;   


    public function get_dftr($id=0)
    {
       global $mysqli;
       $query="SELECT * FROM dbservis";
       if($id != 0)
       {
          $query.=" WHERE id_kategori=".$id." ";
       }
       $data=array();
       $result=$mysqli->query($query);
       while($row=mysqli_fetch_object($result))
       {
          $data[]=$row;
       }
       $response=array(
                      'status' => 1,
                      'message' =>'Get Mahasiswa Successfully.',
                      'data' => $data
                   );
       header('Content-Type: application/json');
       echo json_encode($response);
         
    }    

}
 
?>    