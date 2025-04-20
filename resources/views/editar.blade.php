@extends('layouts.app')

@section('content')

    <main class="max-w-[1200px] m-auto md:flex">

        <div class="flex flex-1">
            @foreach($resultado as $elemento)
            <form action=" {{route('tareas.update',$elemento->$id)}} " method="POST">
                @csrf
                <h4>esto el editar</h4>
                <input class="border-2 border-solid rounded-md" name="nombre_tarea" type="text" placeholder="Nombre tarea">
                <input class="border-2 border-solid rounded-md" name="descripcion" type="text" placeholder="Descripcion"><br>
                <input class="border-2 border-solid rounded-md" name="fecha" type="date" placeholder="fecha">
                <input class="border-2 border-solid rounded-md" name="categoria" type="categoria" placeholder="categoria"><br><br>
                <button class="p-2 hover:bg-sky-300 hover:cursor-pointer border-2 border-solid rounded-md" type="submit">Guardar tarea</button>
            </form>
            @endforeach

            @if(session('succes'))
                <h3> {{session('succes')}} </h3>
            @endif
        </div>

        <table class="border-4 border-black border-collapse text-center m-auto flex-1">
            <thead>
                <tr>
                    <th class="border-2 border-black p-2">Tarea</th>
                    <th class="border-2 border-black p-2">Descripción</th>
                    <th class="border-2 border-black p-2">Fecha</th>
                    <th class="border-2 border-black p-2">Categoría</th>
                </tr>
            </thead>

            <tbody>
            @foreach($resultado as $elemento)
                <tr>
                    <td class="border-2 border-black p-2"> {{$elemento->nombre_tarea}} </td>
                    <td class="border-2 border-black p-2"> {{$elemento->descripcion}} </td>
                    <td class="border-2 border-black p-2"> {{$elemento->fecha}} </td>
                    <td class="border-2 border-black p-2"> {{$elemento->categoria}} </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @if(session('succes'))
        <p class="font-bold"> {{session('succes')}} </p>
    @endif
    <!---!>@if(session('succes'))
        <h3>resultado: {{session('succes')}} </h3>
    @endif<---> 

    <!---!> @foreach ($resultado as $tarea)
        <ul>
            <li> {{$tarea->nombre_tarea}} </li>
            <li> {{$tarea->descripcion}} </li>
        </ul>
    @endforeach <---> 

    </main>

@endsection    