<?php
    foreach ($birthdayUsers as $birthdayUser) {
?>

<form method="POST" action="../post_edit/<?php echo $birthdayUser['id'] ?>">
    <h3>Volledige naam</h3>
    <p><input type="text" name="naam" placeholder="Naam" value="<?php echo $birthdayUser['person'] ?>"></p>
    <h3>Dag</h3>
    <p><input type="text" name="dag" placeholder="Dag" value="<?php echo $birthdayUser['day'] ?>"></p>
    <h3>Maand</h3>
    <p><input type="text" name="maand" placeholder="Maand" value="<?php echo $birthdayUser['month'] ?>"> </p>
    <h3>Jaar</h3>
    <p><input type="text" name="jaar" placeholder="Jaar" value="<?php echo $birthdayUser['year'] ?>"> </p>
    <p><input type="submit" name="submit" value="Verander"></p>
</form>

<?php
    }
?>