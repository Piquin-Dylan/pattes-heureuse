<div>
    <h1>Salut les volunteers</h1>

    <form wire:submit.prevent="submit" class="flex flex-col gap-5">

        <label for="name">Nom du bénévole</label>
        <input wire:model="name" type="text" id="name" placeholder="Entrez le nom d'utilisateur">
        @error('name')<span class="error">{{$message}}</span> @enderror

        <label class="" for="name">Adresse mail</label>
        <input wire:model="email" type="text" id="name" placeholder="Entrez l'adresse mail">
        @error('email') <span class="error">{{$message}}</span> @enderror

        <label for="tel">Numéros de téléphone</label>
        <input type="tel" id="tel" placeholder="Entrez le mot de passe">
        @error('tel') <span class="error">{{$message}}</span> @enderror

        <label>Role</label>
        <select>
            <option></option>
            @error('role') <span class="error">{{$message}}</span> @enderror
        </select>

        <label>Image de profil</label>
        <livewire:upload-image></livewire:upload-image>


        <button type="submit">Créer</button>
    </form>
</div>
