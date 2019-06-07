@if(count($properties))
    <li>
        <a href="#{{$group}}-type-{{$type}}" title="{{ucfirst($type)}}">{{ucfirst($type)}}</a>
        <ul class="ml-5">
            @foreach($properties as $propertyName => $property)
                <li>
                    <a href="#{{$group}}_{{$type}}_{{$propertyName}}" title="{{$property->displayName}}">
                        <span class="{{$property->recommended ? 'recommended' : ''}} text-sm font-normal">
                            {{$property->displayName}}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endif
