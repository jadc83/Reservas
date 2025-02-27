<x-app-layout>
    <div class="flex w-10/12 mx-auto justify-center space-x-8">
        @foreach ($dias as $dia)
            <div class="flex flex-col items-center"> <!-- Contenedor para cada día -->
                <h1 class="text-xl font-semibold">{{ $dia->nombre }}</h1>

                <div class="flex flex-col space-y-2">  <!-- Tramos en columna vertical -->
                    @foreach ($dia->tramos as $tramo)
                        <div class="text-center">
                            <form action="{{ route('dias.show', ['dia' => $dia]) }}" method="get">
                                <x-primary-button value="{{ $tramo->id }}" name="tramo_id">{{ $tramo->horario }}</x-primary-button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
