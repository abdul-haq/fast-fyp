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
       
    while($row = mysqli_fetch_array($result)){
$dompdf->loadHtml('


<table border=1 align=center width=400>
<tr><td>Name : </td>

<td>'.$row['leader_name'].'</td>

</tr>

</table>
');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("",array("Attachment" => false));

        }
    }
}
exit(0);
}

?>