<x-app-layout>

    <h1>{{$dia->nombre}}</h1>
    <h2>{{$tramo->horario}}</h2>
    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <input type="hidden" name="dia_id" value="{{ $dia->id }}">
        <input type="hidden" name="tramo_id" value="{{ $tramo->id }}">
        <x-primary-button>Reservar</x-primary-button>
    </form>


</x-app-layout>
