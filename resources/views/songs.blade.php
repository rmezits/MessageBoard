<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
</head>
<body>
    <h1>
        <a href='/boards'>Back to boards</a>
    </h1> 
<table border="1">
    <tr>
        <th>Thread</th>
        <th>Poster</th>
    </tr>
    @for($i = 0; $i < count($songs); $i++)
        <tr>
            <td>{{ $songs[$i]->title }}</td>
            <td>{{ $songs[$i]->poster }}</td>
        </tr>
    @endfor
</table>
 
</body>
</html>