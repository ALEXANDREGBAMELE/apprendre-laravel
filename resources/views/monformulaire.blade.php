<form method="POST" action="">
    @csrf
    <!-- Vos champs de formulaire ici -->
    <input type="text" name="nom" value="{{ old('nom') }}">
    <button type="submit">Envoyer</button>
</form>
