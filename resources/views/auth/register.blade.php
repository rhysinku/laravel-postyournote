<x-layout>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create your account</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" method="POST" action="{{ route('auth.create') }}">
        @csrf

        <x-form-field>
            <x-form-label for="username" >Username</x-form-label>
          <div class="mt-2">
            <x-form-input name="username" required />
          </div>
          <x-form-error name="username" />
        </x-form-field>
  
        <x-form-field>
            <x-form-label for="email" >Email address</x-form-label>
          <div class="mt-2">
            <x-form-input name="email" required type="email" />
          </div>
          <x-form-error name="email" />
        </x-form-field>
  
        <x-form-field>
            <x-form-label for="password" >Password</x-form-label>
          <div class="mt-2">
            <x-form-input name="password" required />
          </div>
          <x-form-error name="password" />
        </x-form-field>
  
        <x-form-field>
            <x-form-label for="password_confirmation" >Confirm Password</x-form-label>
          <div class="mt-2">
            <x-form-input name="password_confirmation" required  />
          </div>
        </x-form-field>
  
      
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        Already have an account?
        <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a>
      </p>
    </div>
  </div>

</x-layout>