<?php 
    class Users {
        public $name = "Freek";
        public $lastname = "Albertie";
        public $age;
        public $email;
    }
    
    $utente1 = new Users();

    $utente2 = new Users();
    $utente2->name = "Federico";
    $utente2->lastname = "Alberti";
    $utente2->age = 23;
    $utente2->email = "federicoalberti96@gmail.com";
    
    $utente3 = new Users();
    $utente3->name = "Tommaso";
    $utente3->lastname = "Alberti";
    $utente3->age = 7;
    $utente3->email = "tommasoalberti@gmail.com";

    $lista = [$utente1, $utente2, $utente3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($lista as $key => $value) { ?>
        <div><?php echo "Name: ".$value->name."| Lastname: ".$value->lastname."| Age: ".$value->age."| Email: ".$value->email ?></div>
    <?php } ?>
</body>
</html>