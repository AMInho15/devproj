<form action="{{ route('tickets.store') }}" method="POST">
    @csrf
    <input type="text" name="titre" placeholder="Titre" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Créer</button>
</form>