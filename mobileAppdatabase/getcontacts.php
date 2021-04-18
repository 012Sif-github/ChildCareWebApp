<?php 

require_once 'DataBaseConfig.php';

$type = $_GET['item_type'];

if (isset($_GET['key'])) 
{
    $key = $_GET["key"];
    if ($type == 'etshepeng')
     {
        $query = "SELECT username, child, email, phone_number FROM etshepeng";
        $result = mysqli_query($conn, $query);
        $response = array();
        while( $row = mysqli_fetch_assoc($result) )
        {
            array_push($response, 
            array(
                'username'=>$row['username'], 
                'child'=>$row['child'], 
                'email'=>$row['email'],
				'phone_number'=>$row['phone_number']) 
            );
        }
        echo json_encode($response);   
    }
}
 else
 {
    if ($type == 'etshepeng')
     {
        $query = "SELECT username, child, email, phone_number FROM etshepeng";
        $result = mysqli_query($conn, $query);
        $response = array();
        while( $row = mysqli_fetch_assoc($result) )
        {
            array_push($response, 
            array(
                'username'=>$row['username'], 
                'child'=>$row['child'], 
                'email'=>$row['email'],
				'phone_number'=>$row['phone_number']) 
            );
        }
        echo json_encode($response);   
    }
}

mysqli_close($conn);

?>