<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

@section('content')

<main>
    <!-- Sección Hero -->
    <section class="bg-white p-8 md:p-16">
        <div class="flex flex-col md:flex-row items-center justify-between max-w-7xl mx-auto gap-10">
            
            <!-- Columna izquierda -->
            <div class="text-center md:text-left space-y-6 md:w-1/2">
                <h1 class="text-4xl md:text-6xl font-extrabold text-sky-950 leading-tight">¡Organiza tu trabajo por fin!</h1>
                <p class="text-gray-600 text-lg md:text-xl font-medium">
                    Simplifica tu vida y la de tu equipo con el administrador de tareas y to-do list n.º 1 del mundo.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <button class="bg-sky-950 text-white px-6 py-2 rounded-xl hover:bg-sky-800 transition duration-300">Panel de usuario</button>
                    <button class="border-2 border-sky-950 px-6 py-2 rounded-xl hover:bg-sky-950 hover:text-white transition duration-300">Iniciar sesión</button>
                </div>
            </div>

            <!-- Columna derecha -->
            <div class="md:w-1/2 animate-fadeIn">
                <img class="w-full max-w-md mx-auto" src="https://res.cloudinary.com/imagist/image/fetch/q_auto,f_auto,c_scale,w_360/https%3A%2F%2Fwww.todoist.com%2Fstatic%2Fhome-teams%2Fintro%2Fwide%2Fheaderui.es.png" alt="Dashboard ilustración">
            </div>
        </div>
    </section>

    <!-- Sección motivacional -->
    <section id="objetivo" class="max-w-7xl mx-auto py-12 text-center space-y-6">
        <h2 class="text-2xl font-bold text-sky-900">¡Organízate para mañana!</h2>

        <div class="flex justify-center items-center">
            <img class="w-10 h-10" src="https://wac-cdn-bfldr.atlassian.com/K3MHR9G8/at/w8b6rwt99wbns5wnpfkx8t6/icon-templates.svg" alt="">
            <div class="w-40 md:w-[600px] h-1 bg-sky-950 rounded-full"></div>
            <img class="w-10 h-10" src="https://wac-cdn-bfldr.atlassian.com/K3MHR9G8/at/5j5b4s4gg2jktk4wg48q6m/icon-workflow.svg" alt="">
        </div>

        <div class="mt-8 flex flex-col md:flex-row gap-8">
            <div class="flex-1 space-y-4 p-4 hover:shadow-xl rounded-xl transition duration-300">
                <h3 class="text-xl md:text-2xl font-bold text-sky-900">¡Rápido y fácil!</h3>
                <p class="text-gray-500">Categoriza tus tareas para tener más orden. Aumenta tu productividad sin complicaciones.</p>
                <img class="rounded-xl shadow-md" src="https://images.unsplash.com/photo-1631203928493-a4e4eb2b8da1?q=80&w=2069&auto=format&fit=crop" alt="Imagen tareas">
            </div>

            <div class="flex-1 space-y-4 p-4 hover:shadow-xl rounded-xl transition duration-300">
                <h3 class="text-xl md:text-2xl font-bold text-sky-900">¡Ordena mejor tus actividades!</h3>
                <p class="text-gray-500">Tener control de tus pendientes nunca fue tan sencillo y visualmente claro.</p>
                <img class="rounded-xl shadow-md" src="https://plus.unsplash.com/premium_photo-1705010663939-aebe4670bba1?q=80&w=2070&auto=format&fit=crop" alt="Imagen actividades">
            </div>
        </div>
    </section>

    <!-- Sección resumen -->
    <section id="ventajas" class="bg-sky-50 py-12">
        <div class="max-w-3xl mx-auto text-center space-y-4">
            <h2 class="text-2xl font-bold text-sky-950">¡Todas las soluciones en un solo lugar!</h2>
            <p class="text-gray-600">Administra tus tareas, categorízalas, agenda recordatorios y mucho más. Diseñado para adaptarse a ti y tu equipo.</p>
        </div>
    </section>

    <!-- Sección íconos interactivos -->
    <section class="py-12 max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 text-center">
        <!-- Ítem -->
        <div class="group border border-sky-950 p-6 rounded-xl hover:bg-sky-950 hover:text-white transition duration-300 cursor-pointer">
            <i class="fa-regular fa-calendar text-[60px] group-hover:scale-110 transition duration-300"></i>
            <p class="mt-4 font-semibold">Agenda todas tus tareas</p>
        </div>

        <div class="group border border-sky-950 p-6 rounded-xl hover:bg-sky-950 hover:text-white transition duration-300 cursor-pointer">
            <i class="fa-regular fa-thumbs-up text-[60px] group-hover:scale-110 transition duration-300"></i>
            <p class="mt-4 font-semibold">Organízate mejor</p>
        </div>

        <div class="group border border-sky-950 p-6 rounded-xl hover:bg-sky-950 hover:text-white transition duration-300 cursor-pointer">
            <i class="fa-regular fa-bell text-[60px] group-hover:scale-110 transition duration-300"></i>
            <p class="mt-4 font-semibold">Mantente alerta</p>
        </div>

        <div class="group border border-sky-950 p-6 rounded-xl hover:bg-sky-950 hover:text-white transition duration-300 cursor-pointer">
            <i class="fa-regular fa-envelope text-[60px] group-hover:scale-110 transition duration-300"></i>
            <p class="mt-4 font-semibold">Categoriza tus tareas</p>
        </div>

        <div class="group border border-sky-950 p-6 rounded-xl hover:bg-sky-950 hover:text-white transition duration-300 cursor-pointer">
            <i class="fa-regular fa-user text-[60px] group-hover:scale-110 transition duration-300"></i>
            <p class="mt-4 font-semibold">Crece como profesional</p>
        </div>
    </section>
</main>

@endsection
</body>
</html>