<?php
// Подключение к базе данных MySQL
$host = "localhost";
$username = "root";
$password = "";
$database = "work";

$connection = mysqli_connect($host, $username, $password, $database);

// Проверка подключения
if (!$connection) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Получение данных из формы
$name = $_POST['name'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$share_link = $_POST['share_link'];

// Вставка данных в базу данных
$sql = "INSERT INTO users (name, pass, email, phone, company, share_link) VALUES ('$name', '$pass', '$email', '$phone', '$company', '$share_link')";

if (mysqli_query($connection, $sql)) {
    echo "Данные успешно добавлены в базу данных.";
} else {
    echo " " . $sql . "<br>" . mysqli_error($connection);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ваш текущий код для обработки формы
} else {
    echo "Доступ запрещен!";
}
if (isset($_POST['name'], $_POST['pass'], $_POST['email'], $_POST['phone'], $_POST['company'], $_POST['share_link'])) {
    // Ваш текущий код для обработки формы
} else {
    echo "Не все данные были отправлены!";
}

// Закрытие соединения с базой данных
mysqli_close($connection);
?>