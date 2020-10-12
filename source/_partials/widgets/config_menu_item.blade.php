@if(count($properties))
    <li>
        <a href="#{{$group}}-type-{{$type}}" title="{{ucfirst($type)}}">{{ucfirst($type)}}</a>
        <ul class="ml-5">
            @foreach($properties->sortBy('displayName', SORT_NATURAL | SORT_FLAG_CASE) as $propertyName => $property)
                <li>
                    <a href="#{{$group}}_{{$type}}_{{$propertyName}}" title="{{$property->displayName}}" class="{{$property->recommended ? 'recommended' : ''}} menu-normal">
                        {{$property->displayName}}
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endif
