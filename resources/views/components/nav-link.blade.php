@props(['active' => false])

<a aria-current="{{ $active ? 'page' : false }}" class="{{ $active ? 'text-indigo-600' : 'text-gray-900' }} font-semibold"
    {{ $attributes }}>
    {{ $slot }}
</a>
