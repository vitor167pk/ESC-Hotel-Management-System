@extends('layouts.main')

@section('title', 'Nossas Instalações')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="bg-green-900 py-20 text-white text-center">
            <div class="container mx-auto">

        <!-- Galeria de Imagens -->
        <section class="py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl font-semibold text-center text-secondary mb-8">Nossas Instalações</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Adicione imagens da galeria aqui -->
                    <div class="bg-cover bg-center h-96 rounded-lg"
                        style="background-image: url('{{ asset('img/temp/classic.jpg') }}');"></div>
                    <div class="bg-cover bg-center h-96 rounded-lg"
                        style="background-image: url('{{ asset('img/temp/double.png') }}');"></div>
                    <div class="bg-cover bg-center h-96 rounded-lg"
                        style="background-image: url('{{ asset('img/temp/superior.jpg') }}');"></div>
                </div>
            </div>
        </section>