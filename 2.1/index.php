<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        header{
            display: flex;
            justify-content: center;
            gap:10px;
        }
        h1{
            font-size: 20px;
            white-space: nowrap;
            align-self: center;
        }
        main{
            display: flex;
            margin-bottom: 100px;
           justify-content: center;
        }
        footer{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    
    </style>
    <header>
        <img src="https://habrastorage.org/getpro/moikrug/uploads/company/783/909/783/logo/medium_c79639673b5f9e5ef5cca1cfa6df72ab.png" alt="logo">
        <h1>Архипов Вячеслав 221-321 Домашняя работа: Hello, World! </h1>
    </header>
    <main>
        <p>
        <?php
        echo 'hello world'
        ?>
        </p>
        
    </main>
    <footer>
        <a href="tel:+79806427789">Контакты</a>
    </footer>
</body>
</html>