
<div id="app">
  <div class="container">
    <header class="sticky container">
      <div class="logo">
        <img src="{{ asset('img/logo-mcb-header.png') }}" alt="">
      </div>
      <div class="user--header">
        <span>Olá, {{ ucfirst(Auth::user()->name) }} |</span>
        <a 
          href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
        >
          <span>Sair</span>
        </a>
        <form 
          id="logout-form" 
          action="{{ route('logout') }}" 
          method=POST
          class="d-none"
        >
          @csrf
        </form>
      </div>

      <div class="menu--bar">
        <ul class="menu--list">
          <li>
            <a href="#">
              <i class="bx bx-home-alt"></i>
              Home
            </a>
          </li>
          <div class="dropdown dropdown--menu">
            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" >Clientes</a>
            <ul class="dropdown-menu dropdown--ul">
              {{-- New client --}}
              <x-dropdown.item
                title="Novo"
                route="clients.create"
                tooltip="Novo cliente"
              />
              {{-- Potential clients --}}
              <form action="{{ route('clients.index') }}" method="get">
                <input type="hidden" name="client_status_id" value="1">
                <button
                  type="submit"
                  class="dropdown-item" 
                  data-bs-toggle="tooltip"
                  title="Lista os clientes que entraram em contato mas não iniciaram uma ordem de serviço"
                >
                  Potenciais
                </button>
              </form>
              {{-- Clientes com ordens --}}
              {{--Ordens encerradas --}}
              {{--Clientes inativos --}}
              {{--Todos clientes --}}
            </ul>
          </div>
        </ul>
      </div>
    </header>
    <main class="container">
      @yield('content')
    </main>
  </div>
</div>

{{-- BOOTSTRAP JS --}}
<script 
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous">
</script>

{{-- Tooltip --}}
<script src="{{asset('js/tooltip.js')}}"></script>

