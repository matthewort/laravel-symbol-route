@extends('layouts.main-layout')
@section('content')
    <h1>PAGAMENTI</h1>
    <ul>
        @foreach ($pagamenti as $pagamento)

        @if ($loop -> even)  {{-- variabile di laravel che assegna una determinata caratteristica che decidiamo (in questo caso il rosso) agli elementi pari. In questo caso i nomi non possono e non sono pari, ma siccome se una cosa non è pari è per forza dispari a prescindere funziona ugualmente --}}
            <li class="red">
        @else        
            <li class="green">
        @endif
            {{ $pagamento['status'] }} {{-- 'status richiama lo status che c'è nell' array $pagamenti in MainController --}}
            {{ $pagamento['price'] }}
            {{-- {{ $pagamento['prenotazione_id'] }} --}}
        </li>
        @endforeach
    </ul>
@endsection
