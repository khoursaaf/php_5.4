<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
      <?php
      $months = ['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];
       ?>
      <p>La valeur de la troisième ligne de ce tableau est : <?php echo $months[7]; ?>.</p>
      <?php $months[7] = 'août'; ?>
      <p>La nouvelle valeur est : <?php echo $months[7]; ?></p>
    </body>
</html>
