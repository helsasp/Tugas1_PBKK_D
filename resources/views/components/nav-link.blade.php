<<<<<<< HEAD
@props(['active' => false])


=======
@props(['active' => false])


>>>>>>> 0abf12214546c23f8da091a725a676463d1660e9
<a {{ $attributes }}class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false}}">{{ $slot }}</a>