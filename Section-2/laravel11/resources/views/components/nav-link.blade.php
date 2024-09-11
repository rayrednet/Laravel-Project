<a {{ $attributes->merge(['class' => ($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white') . ' block sm:inline-block sm:mr-4 px-3 py-2 text-sm font-medium rounded-md']) }} 
    aria-current="{{ $active ? 'page' : false }}">
        {{ $slot }}
    </a>
    