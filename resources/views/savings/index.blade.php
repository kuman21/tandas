<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tandas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet-button href="#">Agregar Tanda</x-jet-button>
            @if ($savings->count() !== 0)
                <div class="grid grid-cols-3 gap-4 mt-8">
                    @foreach ($savings as $saving)
                        <div class="bg-white shadow-lg rounded-lg px-4 py-6 relative">
                            <a href="#">
                                <p class="font-bold">ID: 1</p>
                                <p >Numeros: 10</p>
                                <p >Inicio: 30/06/2021</p>
                                <p >Total: 10000</p>
                                <p>Estado: Vigente</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex flex-col my-auto items-center mt-20 md:mt-32">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-20 w-40 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <h1 class="text-base md:text-4xl text-gray-300">Aún no se han agregado tandas.</h1>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
