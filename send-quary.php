<?php   
// Contact detail send
if(isset($_POST["user"])){ 
$to = 'sharmahappy7987@gmail.com'; 
$from = 'sharmahappy7987@gmail.com'; 
$fromName = 'Bareilly Ortho'; 
$subject = "Get a Free Quote Bareilly Ortho"; 
$htmlContent = ' 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Bareilly Ortho</title>
    <style type="text/css">
        html,body {
            padding: 0;
            margin: 0;
        }
        .container {
            padding: 1em;
        }
        table.table {
            font-family: verdana,arial,sans-serif;
            font-size: 11px;
            color: #4c4848;
            border-width: 1px;
            border-collapse: collapse;
            text-align: left;
            width: 100%;
        }
        table.table th {
            border-width: 1px;
            padding: 8px 10px;
            border-style: solid;
            border-color: #e2dbdb;
            font-size: 15px;
        }
        table.table td {
            border-width: 1px;
            padding: 0px 8px;
            border-style: solid;
            border-color: #ccc;
            background-color: #ffffff;
            font-size: 15px;
        }
        table.table thead th{
            padding: 15px 8px;
        }
        table.table tbody {

        }
        table.table tr {

        }
        .thankyou {
            background: #da251c;
            padding: 20px;
            text-align: center;
        }
        .thankyou h3 {
            color: #fff;
            margin: 0;
            font-size: 1.5em;
        }
        .signature h5{
            float: right;
            margin-right: 5px;
            font-size: 11px;
        }
    </style>
</head>
<body>
<div class="container">
    <p>Hi,</p>
    <div class="thankyou">
        <h3>You have Customer Contact Detail </h3>
    </div>
    <br>
    <table class="table table-hover data-cart">
        <thead>
        <tr>
            <th>Name :-</th>
            <th>'.$_POST["user"].'</th>
        </tr>
        <tr>
            <th>Email:-</th>
            <th>'.$_POST["cont_email"].'</th>
        </tr>
        <tr>
            <th>Phone:-</th>
            <th>'.$_POST["cont_phone"].'</th>
        </tr>
        <tr>
            <th>Pin:-</th>
            <th>'.$_POST["cont_city"].'</th>
        </tr>
        <tr>
            <th>Address:-</th>
            <th>'.$_POST["cont_message"].'</th>
        </tr>
        </thead>
    </table>
    <div class="signature">
        <h5>Regards by :)Revex Auto Care</h5>
    </div>
</div>
</body>
</html>
'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
// $headers .= 'Cc: info@harshitagarwal.com' . "\r\n"; 
// $headers .= 'Bcc: info@harshitagarwal.com' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo json_encode(['msg'=>true]);
    die();
}else{ 
    echo json_encode(['msg'=>false]);
    die();
}

}
?>