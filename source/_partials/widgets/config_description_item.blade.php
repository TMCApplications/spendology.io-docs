@if(count($properties))
    <h5 id="{{$group}}-type-{{$type}}"><strong>{{ucfirst($type)}}</strong></h5>
    @foreach($properties as $propertyName => $property)
        <div>
            <h6 id="{{$group}}_{{$type}}_{{$propertyName}}" class="font-bold mb-0 {{$property->recommended ? 'recommended' : ''}}">{{$property->displayName}}</h6>
            <small>
                <strong>Property:</strong> <code>{{$propertyName}}</code>
            </small>
            @if($property->default)
                <br />
                <small>
                    <strong>Default:</strong> <code>{{$property->default}}</code>
                </small>
            @endif
            <br />
            @include($property->descriptionIncludePath, compact('group', 'type', 'propertyName', 'property'))
        </div>
    @endforeach
@endif
