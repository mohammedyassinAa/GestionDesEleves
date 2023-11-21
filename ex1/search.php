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
    <h1>Chercher un tel</h1>
    <form method="post">
        <label for="NP">Tapez un nom ou un prenom </label>
        <input type="text" name="NP"><br>
        <input type="submit" value="Envoyer">
    </form>

    <br>

    <?php   
        if (isset($_POST["NP"])) {
            $file = fopen("list.txt","r");
            while (!feof($file)) {
                $line = fgets($file);
                $words = explode(" ", $line);
                if (strcmp($_POST["NP"],$words[0]) == 0 || strcmp($_POST["NP"],$words[1]) == 0) {
                    $phone = $words[4];
                    echo "
                    <style>
                        table {
                            border-collapse: collapse;
                            width: 100%;
                        }
                        th, td {
                            border: 1px solid black;
                            padding: 8px;
                            text-align: left;
                        }
                        th {
                            background-color: #f2f2f2;
                        }
                    </style>
                    <table>
                        <tr>
                            <th>Nom et Prenom</th>
                            <th>Tel</th>
                        </tr>
                        <tr>
                            <td>".$words[0]." ". $words[1]."</td>
                            <td>".$words[4]."</td>
                        </tr>
                    </table>";
                    break;
                }
            
        }
        fclose($file);
        }
    ?>
</body>

</html>