 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Listado de usuarios - Styde. net </title>
 </head>
 <body>
     <h1><?= e($title) ?></h1>
     <hr>

     <ul>
            <?php foreach ($users as $user ): ?>
            <li><?= e($user);?></li> 
            <?php endforeach;?> 
     
     <ul>
     
 </html>