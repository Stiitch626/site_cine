<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste Films</title>
</head>
<body>
    <?php
        for ($i=0; $i < 5; $i++) { 
            # code...
            echo str_repeat('coucou '.$i.' ',2);
        }

    ?>

    <form action="test.php" method="post">
    truc 1<input type="checkbox" name="tru_1" id="1" value="1"> 
    truc 2<input type="checkbox" name="2" id="2" value="genre[]"> 
    truc 3<input type="checkbox" name="3" id="3" value="genre[]">
    truc 4<input type="checkbox" name="4" id="4" value="genre[]">
    <button type="submit">Submit</button>
    </form>

</body>
</html>