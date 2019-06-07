@include('_partials.on_this_page')
<ul class="ml-5">
    @foreach($page->pageItems as $anchor => $linkName)
        <li><a href="#{{ $anchor }}" title="{{ $linkName }}" class="menu-normal">{{ $linkName }}</a></li>
    @endforeach
</ul>
