<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to the Future</title>
</head>

<body>
    <?php

    $presentTime = new DateTime;

    $destinationTime = (new DateTime)->setDate(2001,05, 11)->setTime(10, 00, 00); 

    $differenceTime = $presentTime->diff($destinationTime);
    ?>

        <h2>TIME CONVECTOR</h2>

        <h3>Present Time</h3>
        <?php echo $presentTime->format('M d Y a h : i'); ?>

        <h3>Destination Time</h3>
        <?php echo $destinationTime->format('M d Y a h : i'); ?>

        <h3>Time Interval</h3>
        <?php echo $differenceTime->format('%m months %d days %Y years %h : %i'); ?>

        
</body>
</html>







