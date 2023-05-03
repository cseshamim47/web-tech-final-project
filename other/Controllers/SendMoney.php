<?php 
    session_start();
    require_once '../models/userModel.php';

    if(isset($_REQUEST['submit'])){


        $trx_name = $_REQUEST['trx_name']; 
        $email = $_SESSION['email'];
        $trx_date= $_REQUEST['trx_date'];
        $trx_amount = $_REQUEST['trx_amount'];
        $trx_type = "Send Money"; 






        if($email == "" && $trx_name == "" && $trx_date == ""&& $trx_type=="" && $trx_amount =="") {
            echo "Null value ..";
        }else{
            $trx = ['email'=>$email,'trx_name'=>$trx_name,'trx_date'=>$trx_date,'trx_type'=>$trx_type,'trx_amount'=>$trx_amount];
            $status = trxfunction($trx);
            
            if($status){
                echo "Money Sent";
            }else{
                echo "DB error, please try again...";
            }

        }
    }else{
        echo "invalid request...";
    }

?>