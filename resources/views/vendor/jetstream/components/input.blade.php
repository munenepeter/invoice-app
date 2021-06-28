@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-nile-300 border-gray-300 focus:border-nile-300 focus:ring focus:ring-nile-200 focus:ring-opacity-50 text-gray-100 rounded-md shadow-sm']) !!}>
