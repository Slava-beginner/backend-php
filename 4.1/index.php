<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <title>4.1 task</title>
</head>
<body>
<header>
        <img src="https://habrastorage.org/getpro/moikrug/uploads/company/783/909/783/logo/medium_c79639673b5f9e5ef5cca1cfa6df72ab.png" alt="logo">
        <h1>Архипов Вячеслав 221-321 Домашняя работа: 4.1 </h1>
    </header>
    <main>
        <form action="second.php" method="POST">
            <label for="username">Имя пользователя <input id="username" name="username" type="text"></label>
            <label for="username">Email <input id="username" type="email"></label>
            <fieldset>
                <legend>Тип обращения</legend>
                <label for="complaint" class="radion__btn">Жалоба<input type="radio" value="complaint" name="type" id="complaint"></label>
                <label for="offer" class="radion__btn">Предложение<input type="radio" value="offer" name="type" id="offer"></label>
                <label for="thanks" class="radion__btn">Благодарность<input type="radio" name="type" value="thanks" id="thanks"></label>
            </fieldset>
            <textarea name="" id="" cols="30" rows="10">Текст обращения</textarea>
            <fieldset>
                <legend>Вариант ответа</legend>
                <div class="input_container">
                <input type="checkbox" name="connect-sms" id="sms" value="sms"><label for="sms">смс</label>
                </div>
                <div class="input_container">
                <input type="checkbox" name="connect-email" id="email" value="email"><label for="email">email</label>
                </div>
                
            </fieldset>
            <input type="submit">
        </form>
        <a href="second.php">Вторая страница</a>
    </main>
</body>
</html>