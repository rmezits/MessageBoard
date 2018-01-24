<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Misc</title>
</head>
<body>
    <h1>
        <a href='/boards'>Back to boards</a>
    </h1> 
<table border="1">
    <tr>
        <th>Post</th>
        <th>Poster</th>
    </tr>
    <?php for($i = 0; $i < count($misc); $i++) : ?>
    <tr>
        <td><?= $misc[$i]?></td>
        <td><?= $poster[$i]?></td>
    </tr>
    <?php endfor ?>
</table>
 
</body>
</html>