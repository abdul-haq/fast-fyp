<?php
namespace Dompdf;
require_once './dompdf/autoload.inc.php';
require_once('./connection.php');


if(isset($_POST['submit_val']))
{
$dompdf = new Dompdf(); 
$approve = "SELECT * FROM proposals";

if($result = mysqli_query($link, $approve)){
    if(mysqli_num_rows($result) > 0){
        $output = "<html>";
        while($row = mysqli_fetch_array($result)){
            
            $output .= '<body>
                        <h1>' .$row["p_id"]. '</h1>
                        <h1>' .$row["leader_name"]. '</h1>
                        <h1>' .$row["project_description"]. '</h1>
                        <h1>' .$row["project_tittle"]. '</h1>
                        <h1>' .$row["leader_name"]. '</h1>
                        
                        </body>';
           
        }
        $output .= '</html>';
$dompdf->loadHtml($output);


$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("",array("Attachment" => false));

    

}
}

}

?>