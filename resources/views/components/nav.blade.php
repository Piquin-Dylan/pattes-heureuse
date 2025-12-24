<nav class="bg-regal-orange px-5 py-3 md:flex md:items-center md:justify-between">
    <div class="flex items-center justify-between">

        <img width="200" src="{{asset('logo.svg')}}" alt="logo">

        <input id="nav-toggle" type="checkbox" class="hidden">

        <label for="nav-toggle" class="flex flex-col gap-[6px] md:hidden cursor-pointer">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </label>

    </div>

    <ul class="mobile-menu mt-4 hidden flex-col gap-4 text-white
               opacity-0 -translate-y-3 transition-all duration-300 ease-out
               md:flex md:flex-row md:gap-6 md:mt-0 md:opacity-100 md:translate-y-0">

        <li><a href="{{route('client.home')}}">Accueil</a></li>
        <li><a href="{{route('client.home')}}">A propos</a></li>
        <li><a href="{{route('client.volunteers')}}">Devenir bénévole</a></li>
        <li><a href="{{route('client.adoption')}}">Adoption</a></li>
        <li><a href="{{route('client.contact')}}">Contact</a></li>
    </ul>
</nav>
