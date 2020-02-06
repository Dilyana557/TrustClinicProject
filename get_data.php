<?php
echo "Благодарим Ви! Очаквайте да се свържем с Вас в рамките на 2 часа!";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$modifiedName = $name."<br>"."\n";
$modifiedEmail = $email."<br>"."\n";
$modifiedMessage = $message."<br>"."\n";

file_put_contents("db.txt", $modifiedName, FILE_APPEND);
file_put_contents("db.txt", $modifiedEmail, FILE_APPEND);
file_put_contents("db.txt", $modifiedMessage, FILE_APPEND);

echo "<br>";
echo "Your name is: ";
echo $name;
echo "<br>";
echo "Your email is: ";
echo $email;
echo "<br>";
echo "Your message is: ";
echo $message;
echo "<br>";
echo "Your name, email and message are saved in our database! ";
echo "<br>";
echo "<br>";
echo "<a href='http://localhost/show_saved_name.php'> Data List </a>";

?>