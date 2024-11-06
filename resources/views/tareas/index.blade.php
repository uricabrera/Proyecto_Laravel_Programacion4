<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion to do list en Laravel</title>
</head>
<body>
    <form action="{{ url('/') }}" method="post">
    @csrf
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="agregar tarea">
    </form>

    <table border="1">
        <tr>
            <td>Nombre de la tarea</td>
            <td>eliminar tarea</td>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{$task->nombre}}</td>
            <td>
                <form action="{{ route('task.destroy',$task->id) }}" method='post'>
                    @csrf
                    @method('DELETE')
                    <input type="submit" value='x'>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>