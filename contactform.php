<?php 

if(isset($_POST['submit'])){
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $subject = $_POST['subject'];
    $mailForm = $_POST['email'];
    $message = $_POST['textarea'];

    $mailTo = "mjadoon133@mustafajadoun.com";
    $headers = "From: ".$mailForm;
    $txt = "You have received an e-mail from ".$fname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: mailsend.html");
}


?>