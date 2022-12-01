<!DOCTYPE html>
<html>

<head>
    <title>hehehe</title>
</head>

<body>
    <table border=1>
        
        <tr>
            <th></th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        @foreach ($employees as $bibi)
        @if ($bibi ['salary']>2000) 
    <tr>
        <td> {{$loop->iteration}}</td>
        <td> {{ $bibi ['name']}}</td>
        <td>  {{  $bibi ['surname']}}</td>
        <td> {{  $bibi ['salary']}}</td>
        
    </tr>
	@endif
    @endforeach
    </table>
    

</body>

</html>