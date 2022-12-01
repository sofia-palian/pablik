<!DOCTYPE html>
<html>

<head>
    <title>hehehe</title>
</head>

<body>
    <table border=1>
        
        
        @foreach ($users as $lilu) 
        
    <tr>
        <td> {{ $lilu ['name']}}</td>
        <td>  {{  $lilu ['surname']}}</td>
        <td> @if ($lilu ['banned'] == true) 
       <p style="color:red;">Забанен</p> 
        @else 
       <p style="color:green;">Активен</p> 
        @endif
    </td>
        
    </tr>
    
    @endforeach
    </table>
    

</body>

</html>