<x-layout>
    @if ($errors->any())
    <div>
        <strong>Whoops! Something went wrong.</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
    <h1>Create Account</h1>
    <form action={{route('auth.create')}} method="POST">
@csrf
@method('POST')
        <div>
            <span>Username</span>
            <input type="text" name="username">
        </div>
        <div>
            <span>Email</span>
            <input type="text" name="email">
        </div>
        <div>
            <span>Password</span>
            <input type="text" name="password">
        </div>
        <div>
            <span>Comform Password</span>
            <input type="text" name="password_confirmation">
        </div>

   
            <button>Register</button>
    </form>


</x-layout>