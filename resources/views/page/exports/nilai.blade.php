<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 2; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td></td>
                </tr>
            @endfor
        </tbody>
    </table>
</body>

</html>
