@section('content')
    <h1>Liste des Tickets</h1>
    @foreach ($tickets as $ticket)
        <div>
            <h3>{{ $ticket->titre }}</h3>
            <p>{{ $ticket->description }}</p>
            <p>Statut : {{ $ticket->statut }}</p>
        </div>
    @endforeach
    <a href="{{ route('tickets.create') }}">Créer un ticket</a>
@endsection
