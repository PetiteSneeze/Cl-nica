<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight text-center">
            {{ __('Bem-vindo ao Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-100 via-white to-blue-100 p-6 shadow-xl sm:rounded-lg">
                <div class="text-gray-900 text-center">
                    <h3 class="text-lg font-medium mb-2">{{ __("Você está logado!") }}</h3>
                    <p class="text-gray-600">Explore seus recursos e ferramentas no painel abaixo.</p>
                    <a href="{{ route('dashboard') }}" class="mt-4 inline-block px-5 py-2 bg-blue-600 text-white font-bold rounded-lg shadow-lg hover:bg-blue-500 transition duration-300">
                        Ir para o painel
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
