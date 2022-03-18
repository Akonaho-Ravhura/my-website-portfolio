<?php





$name = $_POST['name'];
$email = $_POST['Email'];
$subject =$_POST['subject'];
$message = $_POST['message'];

$con = mysqli_connect("localhost", "root", "", "akonaho");

$mailheader = "From:" .$name."<" .$email.">\r\n";

$recipient = "akonahoravhura@outlook.com";

mail($recipient, $subject, $message, $mailheader)
or die("error!!!");

echo "Message sent";

?>