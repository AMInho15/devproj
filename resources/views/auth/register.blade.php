<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
    <select name="role">
        <option value="Employé">Employé</option>
        <option value="Technicien">Technicien</option>
        <option value="Admin">Admin</option>
    </select>
    <button type="submit">S’inscrire</button>
</form>