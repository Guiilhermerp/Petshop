<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/pets/update/ {{ $pet['id'] }}" method="POST">
        @csrf
        @method{'PATCH'}
        <label for="">Nome</label>
        <input type="text" name="name" value="{{ $pet['name'] }}">
        </br>
        </br>
        <label for="">Rga</label>
        <input type="text" name="rga" value="{{ $pet['RGA'] }}">
        </br>
        </br>
        <label for="">Data Nascimento</label>
        <input type="date" name="data_nascimento" value="{{ $pet['data_nascimento'] }}"> 
        </br>
        </br>   
        <select name="owner_id" >
            @foreach($owners as $owner)
                <option value="{{ owner['id'] }}">{{ $owner["name"] }}</option>
            @endforeach
        </select>

        <input type="submit">
    </form>
</body>
</html>