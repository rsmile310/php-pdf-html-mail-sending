
<?php
    $to = "info@hyderabadcricketclub.com";
    // $to = "rsmile310@gmail.com";
    $subject = "USINESS SHOWER ENQUIRY FORM";

    $fullname = $_POST['name'];
    $category = $_POST['category'];
    $company = $_POST['company'];
    $city = $_POST['city'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['email'];
    $docInfo = $_FILES['docInfo'];
    $message = '
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <table>
                <tr>
                    <td><b>Name: </b>'.$fullname.'</td>
                </tr>
                <tr>
                    <td><b>Category: </b>'.$category.'</td>
                </tr>
                <tr>
                    <td><b>Company: </b>'.$company.'</td>
                </tr>
                <tr>
                    <td><b>City: </b>'.$city.'</td>
                </tr>
                <tr>
                    <td><b>Contact Number: </b>'.$contactNumber.'</td>
                </tr>
                <tr>
                    <td><b>email: </b>'.$email.'</td>
                </tr>
            </table>
        </body>
    </html>
    ';

    $tmp_name = $_FILES['docInfo']['tmp_name']; // get the temporary file name of the file on the server
    $name     = $_FILES['docInfo']['name']; // get the name of the file
    $size     = $_FILES['docInfo']['size']; // get size of the file for size validation
    $type     = $_FILES['docInfo']['type']; // get type of the file
    $error     = $_FILES['docInfo']['error']; // get the error (if any)
 
    //validate form field for attaching the file
    if($error > 0)
    {
        die('Upload error or No files uploaded');
    }
 
    //read from the uploaded file & base64_encode content
    $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
    $content = fread($handle, $size); // reading the file
    fclose($handle);                 // close upon completion
 
    $encoded_content = chunk_split(base64_encode($content));
    $boundary = md5("random"); // define boundary with a md5 hashed value
 
    //header
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
    $headers .= "From:".$email."\r\n"; // Sender Email
    $headers .= "Reply-To: ".$email."\r\n"; // Email address to reach back
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
         
    // //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));
         
    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $type; name=".$name."\r\n";
    $body .="Content-Disposition: attachment; filename=".$name."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
    $body .= $encoded_content; // Attaching the encoded file with email
     
    $sentMailResult = mail($to, $subject, $body, $headers);
 
    if($sentMailResult ){
        echo "<h3>File Sent Successfully.<h3>";
        // unlink($name); // delete the file after attachment sent.
    }
    else{
        die("Sorry but the email could not be sent.
                    Please go back and try again!");
    }

    header('Content-Type: application/json');
    echo json_encode($response);
?>