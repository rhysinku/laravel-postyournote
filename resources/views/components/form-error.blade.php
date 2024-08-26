@props(['name'])

@error($name)
    <p class="text-red-600 text-sm italic font-bold mt-1">{{ $message }}</p>
@enderror