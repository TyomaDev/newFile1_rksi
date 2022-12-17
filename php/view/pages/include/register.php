
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
        if (!move_uploaded_file($_FILES['avatar']['name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../../../../index.php');
            $password = md5($password);
           
        }
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
            
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '../uploads/')");
       // mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '2@dsas', '2@dsas', '2@dsas', '2@dsas', 'NULL')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        
        echo $_SESSION['message'];

} else{
    $_SESSION['message1'] = 'Пароли не сходятся';
    header('location: ../../../../index.php');;
}

?>


