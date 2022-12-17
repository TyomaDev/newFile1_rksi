
<?php
session_start();
require_once 'connect.php';




$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$otdel = $_POST['otdel'];



if ($password === $password_confirm) {
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../../../../index.php');
            $password = md5($password);
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            header('Location: ../../../../index.php');
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
       // mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '2@dsas', '2@dsas', '2@dsas', '2@dsas', 'NULL')");

       mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../../../../index.php');
        echo $_SESSION['message'];
        }
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        header('Location: ../../../../index.php');

} else{
    $_SESSION['message1'] = 'Пароли не сходятся';
    header('location: ../../../../index.php');;
}
header('Location: ../../../../index.php'); 
?>


