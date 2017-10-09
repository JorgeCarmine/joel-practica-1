<html>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <td>{{ $nombre }}</td>
            </tr>
            <tr>
                <th>Días</th>
                <td>{{ $dias }}</td>
            </tr>
        </thead>
    </table>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Pago</th>
                <td>${{ $pago }}</td>
            </tr>
            <tr>
                <th>Bono</th>
                <td>${{ $bono }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>${{ $total }}</td>
            </tr>
        </thead>
    </table>
</body>
</html>