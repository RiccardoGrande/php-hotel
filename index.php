<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
    ],

];

foreach ($hotels as $key => $value) {

    echo $key = $value['name'];
    echo $key = $value['description'];
    echo $key = $value['parking'];
    echo $key = $value['vote'];
    echo $key = $value['distance_to_center'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Document</title>
</head>
<body>
<div class="container">

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">parking</th>
            <th scope="col">vote</th>
            <th scope="col">distance_to_center</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($hotels as $key => $value): ?>
            <th scope="row">1</th>
            <td><?=$value['name'];?></td>
            </tr>
            <?php endforeach;?>
            <tr>
            <?php foreach ($hotels as $key => $value): ?>
            <th scope="row">2</th>
            <td><?=$value['description'];?></td>

            </tr>
            <?php endforeach;?>
            <tr>
            <?php foreach ($hotels as $key => $value): ?>
            <th scope="row">3</th>
            <td><?=$value['parking'];?></td>

            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    </div>
</div>
</body>
</html>
