@extends('_layouts.documentation')

@php
$widget = $page->widget;
$configs = $page->widgets->configs->{$widget};
$standard = $configs->standard;
$render = $configs->render;
$hasRender = $render && count($render);
@endphp

@section('content')
    @yield('heading-content')

    <h3 id="basic">Configuration API</h3>
    <p class="mb-0">Please find the full configuration list for the {{$widget}} widget.</p>
    <p class="mb-0">
        We recommend that you include
        <strong>
            <span class="recommended">Highlighted</span>
        </strong> optional properties in your configuration file.
    </p>

    @if(!$hasRender)
        <p>These properties should be passed to the <code>SPENDOLGOY.{{$widget}}.new</code> function.</p>
    @endif


    <div class="lg:hidden">
        @include('_partials.on_this_page_medium')
        <div class="sm:flex">
            <div class="{{$hasRender ? 'sm:w-1/2' : 'w-full'}}">
                @if($hasRender)
                    <h4><a href="#type-standard">Widget configuration</a></h4>
                @endif
                <ul class="ml-5">
                    @php($group = 'standard')
                    @foreach($standard as $type => $properties)
                        @include('_partials.widgets.config_menu_item', compact('group', 'type', 'properties'))
                    @endforeach
                </ul>
            </div>

            @if($hasRender)
                <div class="sm:w-1/2">
                    <h4><a href="#type-render">Render configuration</a></h4>
                    <ul class="ml-5">
                        @php($group = 'render')
                        @foreach($render as $type => $properties)
                            @include('_partials.widgets.config_menu_item', compact('group', 'type', 'properties'))
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <hr class="divider"/>

    @if($hasRender)
        <h4 id="type-standard">Widget Configuration</h4>
        <p>These properties should be passed as an object to the <code>SPENDOLGOY.{{$widget}}.new</code> function.</p>
    @endif

    @php($group = 'standard')
    @foreach($standard as $type => $properties)
        @include('_partials.widgets.config_description_item', compact('group', 'type', 'properties'))
        @if(!$loop->last)
            <hr class="subtle" />
        @endif
    @endforeach


    @if($hasRender)
        <hr class="divider" />
        <h4 id="type-render">Render Configuration</h4>
        <p>These properties should be passed as an object to the <code>SPENDOLGOY.{{$widget}}.render</code> function.</p>

        @php($group = 'render')
        @foreach($render as $type => $properties)
            @include('_partials.widgets.config_description_item', compact('group', 'type', 'properties'))
            @if(!$loop->last)
                <hr />
            @endif
        @endforeach
    @endif
@endsection

@section('page-menu')
    @if($hasRender)
        <h6><a href="#type-standard">Widget configuration</a></h6>
    @endif
    <ul class="ml-5">
        @php($group = 'standard')
        @foreach($standard as $type => $properties)
            @include('_partials.widgets.config_menu_item', compact('group', 'type', 'properties'))
        @endforeach
    </ul>

    @if($hasRender)
        <div>
            <h6><a href="#type-render">Render configuration</a></h6>
            <ul class="ml-5">
                @php($group = 'render')
                @foreach($render as $type => $properties)
                    @include('_partials.widgets.config_menu_item', compact('group', 'type', 'properties'))
                @endforeach
            </ul>
        </div>
    @endif
@endsection
