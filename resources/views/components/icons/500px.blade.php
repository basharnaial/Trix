@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M1000 500c0 276-224 500-500 500S0 776 0 500 224 0 500 0s500 224 500 500zm-125-2c0-105-65-185-176-185-88 0-147 60-199 121-54-64-109-121-200-121-110 0-175 84-175 187 0 108 71 188 179 188 91 0 140-57 196-116 52 60 115 116 198 116 108 0 177-86 177-190zm-437 4c-33 39-87 83-135 83-51 0-81-34-81-83 0-45 30-87 78-87 52 0 105 52 138 87zm341-2c0 47-28 85-79 85-59 0-104-44-137-83 32-35 80-88 134-88 51 1 82 40 82 86z"></path>
</svg>
