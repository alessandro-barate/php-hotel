<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

foreach ($hotels as $hotel) {

    echo '<hr>';
    if ($hotel['parking'] === true) {
        $hotel['parking'] = 'Parcheggio disponibile';
        echo '<br>';
    } else {
        $hotel['parking'] = 'Parcheggio non disponibile';
        echo '<br>';
    };

    foreach ($hotel as $details) {
        echo $details . '<br>';
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Hotels</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <?php
                                foreach ($hotels[0] as $key => $value) : ?>
                                    <th scope="col">
                                        <?php
                                        echo $key;
                                        ?>
                                    </th>
                                <?php endforeach ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hotels as $hotel) : ?>
                                <tr>
                                    <?php
                                    foreach ($hotel as $key => $value) : ?>
                                        <td scope="row">
                                            <?php
                                            if ($hotel['parking'] === true) {
                                                $hotel['parking'] = 'Parcheggio disponibile';
                                                echo '<br>';
                                            } else {
                                                $hotel['parking'] = 'Parcheggio non disponibile';
                                                echo '<br>';
                                            }
                                            ?>
                                        </td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>