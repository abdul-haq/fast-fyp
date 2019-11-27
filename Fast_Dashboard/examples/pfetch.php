<?php 
    if(isset($_GET['filter'])){
        $filter = trim($_GET['filter']);
        if(!empty($_GET['filter'])){
            $con = mysqli_connect('localhost','root','','fastfyp');
            if($filter == 'all'){
                $stmnt = $con->prepare('select * from proposals');
            }else {
                $stmnt = $con->prepare('select * from proposals where batch=?');
                $stmnt->bind_param('s',$filter);
            };
            $stmnt->execute();
            $stmnt->store_result();
            $stmnt->bind_result($id,$lname,$m1,$m2,$batch,$dept,$teacher,$ptitle,$pdesc,$lroll,$m1roll,$m2roll,$img,$status);
            $final = array();
            while($stmnt->fetch()){
                $each = array(
                    'leader'=>$lname,
                    'lroll'=>$lroll,
                    'dept'=>$dept,
                    'teacher'=>$teacher,
                    'batch'=>$batch,
                    'status'=>$status

                );
                array_push($final,$each);
            };
            echo json_encode($final);
            $stmnt->close();
            $con->close();
        };
    };
?>