@extends('layouts.app')

@section('titulo')
 Registrate en Devstagram


@endsection

@section('contenido')
<div class="md:felx">
    <div class=" md:w-6/12 p-10">
        <img src="{{asset('img/profile-picture.jpeg')}}" alt="imagen de registro">
    </div>
</div>

<div class=" grid grid-cols-2  ">
    <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Registro</h2>
        <form>
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre completo" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">user name</label>
                <input type="password" id="password" name="password" placeholder="Escribe tu contraseña" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>


            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="Escribe tu correo electrónico" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring">Registrarse</button>
        </form>
    </div>
</div>






@endsection