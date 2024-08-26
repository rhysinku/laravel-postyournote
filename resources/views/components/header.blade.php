<header class="bg-gray-100">
  <div class="container mx-auto flex justify-between items-center py-5">

    <a href={{route('home')}}><h1 class="font-bold text-4xl text-blue-950">PostYourNote</h1></a>
    <nav>
      <ul class="flex items-center justify-between gap-3">
        <li><a href={{route('home')}}>Home</a></li>
       @guest
       <li><a href={{route('view.login')}}>Login</a></li>
       <li><a href={{route('view.register')}}>Register</a></li>
       @endguest
       

       @auth
         <form action="{{route('auth.logout')}}" method="POST">
          @csrf
          <button>Logout</button>
        </form>
       @endauth

      </ul>
    </nav>
</div>
</header>