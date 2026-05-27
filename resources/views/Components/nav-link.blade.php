@props(['active' => false, 'type' => 'a'])


@if ($type === 'a')
    <a {{ $attributes->merge(['href' => '/']) }} aria-current="{{ $active ? 'page' : 'false' }}"
        class="{{ $active ? 'bg-blue-500 text-white p-1 rounded-lg' : 'text-gray-300 hover:bg-gray-200 hover:text-white' }}">
        {{ $slot }}
    </a>
@else
    <button
        class="{{ $active ? 'bg-blue-500 text-white p-1 rounded-lg' : 'text-gray-300 hover:bg-gray-200 hover:text-white' }}"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}

    </button>
@endif
