<h1>Formulaire d'Ajout</h1>

<form action="/save" method="post">
    @csrf
    <label for="">Mon titre</label>
    <input type="text" name="title">
    <label for="">Description</label>
    <input type="text" name="detail">
    <button type="submit">Ajouter</button>
</form>