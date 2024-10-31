<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        /* Стили для горизонтального расположения элементов */
        header {
            display: flex;
            align-items: center; /* Выравнивание по вертикали по центру */
            padding: 10px; /* Отступ для красоты */
        }

        nav {
            align-items: center;
        }

    </style>
</head>
<header>
    <h1>PHP</h1>
    <nav><?php include 'navigation.php'; ?></nav>
</header>

<main>

</main>

<footer><?php include 'footer.php'; ?></footer>
</html>