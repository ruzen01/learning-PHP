<?php 
// Проверка наличия данных в POST после отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['article_text'])) { 
        exit('No data'); 
    } else { 
        echo htmlspecialchars($_POST['article_text']); 
    }
}
?>