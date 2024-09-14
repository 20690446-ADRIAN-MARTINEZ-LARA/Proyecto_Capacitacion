<x-appAdmin-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Editar periodo') }}
        </h2>
    </x-slot>

    <div class="min-h-screen flex flex-col  items-center pt-6  bg-gray-100">
        <form action="{{ route('periodos.update', ['periodo' => $periodo]) }}" method="POST"
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @csrf
            @method('PATCH')
            <!-- Periodo -->
            <div class="mt-4">
                <x-input-label for="periodo" value="Periodo" />
                <x-text-input id="periodo" name="periodo" type="text" class="mt-1 block w-full" value="{{ $periodo->periodo }}"/>
            </div>

            <x-primary-button class="mt-4">Actulizar</x-primary-button>
        </form>
    </div>
</x-appAdmin-layout>
