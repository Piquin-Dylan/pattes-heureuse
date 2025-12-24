<div>
    <h1>Salut les volunteers</h1>

    <form class="flex flex-col gap-5">
        <label for="name">Nom du bénévole</label>
        <input type="text" id="name" placeholder="Entrez le nom d'utilisateur">

        <label class="" for="name">Adresse mail</label>
        <input type="text" id="name" placeholder="Entrez l'adresse mail">

        <label for="tel">Numéros de téléphone</label>
        <input type="tel" id="tel" placeholder="Entrez le mot de passe">

        <label>Role</label>
        <select>
            <option></option>
        </select>

        <label>Image de profil</label>
        <livewire:upload-image></livewire:upload-image>


        <button type="submit">Créer</button>
    </form>
</div>
