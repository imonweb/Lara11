{{-- <a {{ $attributes }}>{{ $slot }}</a> --}}

@props(['active' => false, 'type' => 'a'])

<?php if ($type === 'a') : ?>

<a class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}" aria-current="{{ $active ? 'page' : 'false' }}"
  {{ $attributes }}
  >{{ $slot }}</a>

<?php else : ?>

<button class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}" aria-current="{{ $active ? 'page' : 'false' }}"
  {{ $attributes }}
  >{{ $slot }}</button>

<?php endif ?>
