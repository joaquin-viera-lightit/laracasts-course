@props(['active' => false])

<a {{ $attributes->merge(['href' => '/']) }} aria-current="{{ $active ? 'page' : 'false' }}"
    class="{{ $active ? 'bg-blue-500 text-white p-1 rounded-lg' : 'text-gray-300 hover:bg-gray-200 hover:text-white' }}">
    {{ $slot }}
</a>
