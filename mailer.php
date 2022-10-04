<?php
    $to = "info@hyderabadcricketclub.com";
    // $to = "rsmile310@gmail.com";
    $subject = "Membership Enquiry Form";

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $fullName = $_POST['fullName'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone'];
    $industry = $_POST['industry'];
    $company = $_POST['company'];
    $liveCity = $_POST['liveCity'];
    $workCity = $_POST['workCity'];
    $reference1 = $_POST['reference1'];
    $reference2 = $_POST['reference2'];
    $moreInfoTxt = $_POST['moreInfoTxt'];

    $message = '
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <table>
                <tr>
                    <td><b>First Name: </b>'.$firstName.'</td>
                </tr>
                <tr>
                    <td><b>Last Name: </b>'.$lastName.'</td>
                </tr>
                <tr>
                    <td><b>Age: </b>'.$age.'</td>
                </tr>
                <tr>
                    <td><b>Email: </b>'.$email.'</td>
                </tr>
                <tr>
                    <td><b>Phone Number: </b>'.$phoneNumber.'</td>
                </tr>
                <tr>
                    <td><b>Industry: </b>'.$industry.'</td>
                </tr>
                <tr>
                    <td><b>Company: </b>'.$company.'</td>
                </tr>
                <tr>
                    <td><b>Where do you live?: </b>'.$liveCity.'</td>
                </tr>
                <tr>
                    <td><b>Place of Work: </b>'.$workCity.'</td>
                </tr>
                <tr>
                    <td><b>Reference1: </b>'.$reference1.'</td>
                </tr>
                <tr>
                    <td><b>Reference2: </b>'.$reference2.'</td>
                </tr>
                <tr>
                    <td><b>Something we should know: </b>'.$moreInfoTxt.'</td>
                </tr>
            </table>
        </body>
    </html>
    ';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: '.$fullName.'<'.$email.'>'. "\r\n";
    $response = false;

    if(mail($to,$subject,$message,$headers))
        $response = true;

    header('Content-Type: application/json');
    echo json_encode($response);
?>