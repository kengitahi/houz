@props(['title'])
<p {{$attributes->merge(["class"=>"capitalize mb-2 text-lg font-semibold tracking-tight text-gray-900
    dark:text-white"])}}
    style="letter-spacing:0.5px">
    {{$title}}
</p>