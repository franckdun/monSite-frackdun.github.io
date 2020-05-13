<?php 
if($_POST){
    $firstname= $_POST['firstname'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    
    $headers ="MIME-Version: 1.0\r\n";
    $headers = "Content-type: text/plain; charset=iso+8859-1\r\n";
    $jeaders = "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";

    $subjet="Chaine de caractères";
    $destinataire="scorven7@gmail.con";
    $body="message";
    
    if(mail($destinataire,$suject,$body,$headers)) {
      $response['status']='succes';
      $response['msg']='you mail is sent';
    } else {
      $response['status']='error';
      $response['msg']='Something went wrong';
    }
    echo json_encode($response);
}
?>

