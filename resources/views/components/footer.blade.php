<footer class="bg-regal-orange px-5 py-10">
    <div class="flex flex-col lg:flex-row lg:justify-between lg:gap-10">
        <div class="flex-1 mb-8 lg:mb-0">
            <img class="w-48 md:w-64 mb-4" alt="logo de Les Pattes Heureuses" src="{{ asset('Branding.svg') }}">
            <p class="text-white text-sm leading-relaxed">
                {{__('Fondé par Élise Martin, le refuge Les Pattes Heureuses est passé d’un petit terrain avec quelques animaux à un lieu accueillant plus de 200 chiens et chats par an grâce à une équipe dévouée.')}}
            </p>
        </div>
        <div class="flex-1 mb-8 lg:mb-0">
            <h3 class="text-white font-black mb-3">{{ __('Contact') }}</h3>
            <ul class="text-white space-y-1 text-sm">
                <li>{{ __('Chaussée de Wavre 412  1300 Wavre, Belgique') }}</li>
                <li>{{ __('04 99 38 27 64') }}</li>
                <li>{{ __('patteheureuse@gmail.com') }}</li>
            </ul>
        </div>
        <div class="flex-1">
            <h3 class="text-white font-black mb-3">{{ __('Navigation') }}</h3>
            <ul class="text-white space-y-1 text-sm">
                <li><a href="#" class="hover:underline">{{ __('Accueil') }}</a></li>
                <li><a href="#" class="hover:underline">{{ __('A propos') }}</a></li>
                <li><a href="#" class="hover:underline">{{ __('Contact') }}</a></li>
                <li><a href="#" class="hover:underline">{{ __('Devenir bénévole') }}</a></li>
            </ul>
        </div>
    </div>
</footer>
