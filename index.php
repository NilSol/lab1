<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>