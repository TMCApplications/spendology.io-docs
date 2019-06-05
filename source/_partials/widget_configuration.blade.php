@php
$configs = $page->widgets->configs->{$widget};
$standard = $configs->standard;
$render = $configs->render;
$hasRender = $render && count($render);
@endphp

<h3 id="basic">Configuration API</h3>
<p class="mb-0">Please find the full configuration list for the {{$widget}} widget.</p>

<div class="md:flex">
    <div class="{{$hasRender ? 'md:w-1/2' : 'w-full'}}">
        @if($hasRender)
            <h4><a href="#type-standard">Widget configuration</a></h4>
        @else
            <p>These properties should be passed to the <code>SPENDOLGOY.{{$widget}}.new()</code> function.</p>
        @endif
        <ul class="list-disc ml-10">
            @php($group = 'standard')
            @foreach($standard as $type => $properties)
                @include('_partials.widget_config_menu_item', compact('group', 'type', 'properties'))
            @endforeach
        </ul>
    </div>

    @if($hasRender)
        <div class="md:w-1/2">
            <h4><a href="#type-render">Render configuration</a></h4>
            <ul class="list-disc ml-10">
                @php($group = 'render')
                @foreach($render as $type => $properties)
                    @include('_partials.widget_config_menu_item', compact('group', 'type', 'properties'))
                @endforeach
            </ul>
        </div>
    @endif
</div>

<hr />
@if($hasRender)
    <h4 id="type-standard">Widget Configuration</h4>
    <p>These properties should be passed as an object to the <code>SPENDOLGOY.{{$widget}}.new</code> function.</p>
@endif

@php($group = 'standard')
@foreach($standard as $type => $properties)
    @include('_partials.widget_config_description_item', compact('group', 'type', 'properties'))
    @if(!$loop->last)
        <hr />
    @endif
@endforeach

@if($hasRender)
    <hr />
    <h4 id="type-render">Render Configuration</h4>
    <p>These properties should be passed as an object to the <code>SPENDOLGOY.{{$widget}}.render</code> function.</p>

    @php($group = 'render')
    @foreach($standard as $type => $properties)
        @include('_partials.widget_config_description_item', compact('group', 'type', 'properties'))
        @if(!$loop->last)
            <hr />
        @endif
    @endforeach
@endif
