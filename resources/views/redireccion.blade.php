@extends('layouts.app')

@section('content')

<main class="max-w-7xl mx-auto px-4 py-20 md:flex gap-6">
    
    <!-- Formulario -->
    <div class="flex-1 bg-white shadow-xl rounded-2xl p-6">
        <h2 class="text-2xl font-bold mb-6 text-sky-700">Registrar Nueva Tarea</h2>

        <form action="/tareas" method="POST" class="space-y-4">
            @csrf

            <input class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-sky-400" 
                   name="nombre_tarea" type="text" placeholder="Nombre de la tarea" required>

            <input class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-sky-400" 
                   name="descripcion" type="text" placeholder="Descripción" required>

            <input class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-sky-400" 
                   name="fecha" type="date" required>

            <input class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-sky-400" 
                   name="categoria" type="text" placeholder="Categoría" required>

            <button type="submit" 
                    class="w-full bg-sky-500 text-white py-3 rounded-xl hover:bg-sky-600 transition duration-200">
                Guardar tarea
            </button>
        </form>
    </div>

    <!-- Tabla -->
    <div class="flex-1 bg-white shadow-xl rounded-2xl p-6 mt-10 md:mt-0 overflow-auto">
        <h2 class="text-2xl font-bold mb-6 text-sky-700">Lista de Tareas</h2>

        <table class="w-full border-collapse text-sm md:text-base">
            <thead class="bg-sky-100 text-sky-800">
                <tr>
                    <th class="p-3 text-left">Tarea</th>
                    <th class="p-3 text-left">Descripción</th>
                    <th class="p-3 text-left">Fecha</th>
                    <th class="p-3 text-left">Categoría</th>
                    <th class="p-3 text-left">Acción</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($resultado as $elemento)
                <tr>
                    <td class="p-3">{{ $elemento->nombre_tarea }}</td>
                    <td class="p-3">{{ $elemento->descripcion }}</td>
                    <td class="p-3">{{ $elemento->fecha }}</td>
                    <td class="p-3">{{ $elemento->categoria }}</td>
                    <td class="p-3">
                        <form action="{{ route('tareas.destroy', $elemento->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition duration-200">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

<!-- Mensajes de éxito -->
@if(session('succes'))
    <div class="max-w-3xl mx-auto mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
        {{ session('succes') }}
    </div>
@endif

@endsection