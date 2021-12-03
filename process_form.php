<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Submit a Review</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em>Restaurant:</em> <?php echo $_POST["restaurant"]?></li>
        <li><em>Restaurant Location:</em> <?php echo $_POST["loc_restaurant"]?></li>
        <li><em>Rating:</em> <?php echo $_POST["rating1"]?></li>
        <li><em>User Review:</em> <?php echo $_POST["othercomments"]?></li>
    </ol>
</body>
</html>