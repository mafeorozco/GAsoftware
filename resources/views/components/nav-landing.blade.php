<header class="z-40 sticky top-0 bg-slate-50 shadow">
    <div class="container flex flex-col sm:flex-row justify-between items-center mx-auto py-4 px-8">
        <div class="flex items-center text-2xl">
            <div class="">
              <img class="size-32" src="{{ asset('storage/img/logo.png') }}" alt="logo" />
            </div>
        </div>
        <div class="flex mt-4 sm:mt-0">
            <a class="px-4" href="#features">Planes</a>
            <a class="px-4" href="#services">Servicios</a>
            <a class="px-4" href="#contact">Contactanos</a>
        </div>
        <div class="hidden md:block">
          <a href="{{ url('dashboard') }}">
            <button type="button"
                class="py-3 px-8 text-sm bg-sky-400 hover:bg-slate-700 hover:text-slate-50 rounded text-white">Iniciar sesión
            </button>
          </a>
        </div>
    </div>
</header>