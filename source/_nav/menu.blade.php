@php $level = $level ?? 0 @endphp

<ul class="list-none p-0 my-0">
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
</ul>
