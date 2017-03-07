  <?php
//Принимаем постовые данные
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];
//Тут указываем на какой ящик посылать письмо
$to = "errom@yandex.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = " первая Заявка с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)."<br />
сообщение: ".htmlspecialchars($user_message);

// Отправляем письмо при помощи функции mail();
$headers = "From: workneu.sl <roman@workneu.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location:thanks.html.html');
exit();
?>