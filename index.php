<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор валют</title>
</head>
<body>
<form action="" method="post">
<b>Введите сумму:</b><br>
    <p> <input type="number" size="20" required pattern="^[ 0-9]+$" name="name"/></p>
    <p><select size="5" required multiple name="sel">
            <option disabled>Выбирите валюту</option>
            <option value="UAH">UAH</option>
            <option value="RUB">RUB</option>
            <option value="BYN">BYN</option>
            <option value="EUR">EUR</option>
            <option value="USD">USD</option>
        </select></p>
    <p> <input TYPE="submit" value ="посчитать"></p> <!-- снизу должен быть код подсчета валюты -->
</form>
        <?php
        $name = $_POST['name'];
        if($_POST['sel'] == "UAH")
        {
$res = $name * 1;
            echo $res . ' '. $_POST['sel'];
        }
        if($_POST['sel'] == "RUB")
        {
            $res  = $name * 0.41;
            echo $res . ' ' . $_POST['sel'];
        }
        if($_POST['sel'] == "BYN")
        {
            $res  =$name * 1.119;
            echo $res . ' ' . $_POST['sel'];
        }
        if($_POST['sel'] == "EUR")
        {
            $res  = $name * 27.66;
            echo $res . ' ' . $_POST['sel'];
        }
        if($_POST['sel'] == "USD")
        {
            $res  = $name * 25.0;
           echo $res . ' ' . $_POST['sel'];
        }
        ?>
</body>
</html>