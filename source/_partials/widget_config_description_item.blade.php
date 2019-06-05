@if(count($properties))
    <h5 id="{{$group}}-type-{{$type}}"><strong>{{ucfirst($type)}}</strong></h5>
    @foreach($properties as $propertyName => $property)
        <p>
            <strong id="{{$group}}_{{$type}}_{{$propertyName}}">
                {{$property->displayName}}
                <small>
                    (Property: <code>{{$propertyName}}</code>)
                </small>
                @if($property->default)
                    <small>
                        (Default: <code>{{$property->default}}</code>)
                    </small>
                @endif
            </strong>
            <br />
            @include($property->descriptionIncludePath, compact('group', 'type', 'propertyName', 'property'))
        </p>
    @endforeach
@endif
