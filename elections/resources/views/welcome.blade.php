<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> BIENVENU LES AMIS </h1>
<div>
    <form method="post" action="/region_insert"> {{ csrf_field() }}
        <div  class="container">

        <label for="pseudo">ajout de region</label> <br> <br>
        <input type="text" id="ajout de region" name="ajout de region" required><br> <br>
         
        </div>
        <div>
        <input type="submit" value="valider">
        </div>
    </form>
</div>
</body>
</html>