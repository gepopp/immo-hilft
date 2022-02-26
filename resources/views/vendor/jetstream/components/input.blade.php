@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-gray-600 focus:ring focus:ring-gray-200 focus:ring-opacity-50 shadow-sm']) !!}>
