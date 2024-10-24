<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Loop For</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 70px;
        }

        .number-list {
            list-style: none;
            padding: 0;
        }

        .number-item {
            margin-bottom: 10px;
            padding: 13px;
            background-color: #f410f320f100;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h2>Números de 1 a 100:</h2>
    <ul class="number-list">
        <?php
        for ($i = 1; $i <= 100; $i += 2) {
            echo "<li class='number-item'>$i</li>";
        }
        ?>
    </ul>
</body>

</html>