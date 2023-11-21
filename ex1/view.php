<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "nav.php";
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Sexe</th>
                <th>Tel</th>
                <th>Mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $file = fopen("list.txt","r+");
                while(!feof($file)) {
                    $line = fgets($file);
                    $words = explode(" ", $line);
            ?>
                <tr>
                    <?php foreach($words as $word) { ?>
                        <th><?php echo"$word"; ?></th>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>