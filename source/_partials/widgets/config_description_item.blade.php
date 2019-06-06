@if(count($properties))
    <h5 id="{{$group}}-type-{{$type}}"><strong>{{ucfirst($type)}}</strong></h5>
    @foreach($properties as $propertyName => $property)
        <p>
            <strong id="{{$group}}_{{$type}}_{{$propertyName}}">
                <span class="{{$property->recommended ? 'recommended' : ''}}">{{$property->displayName}}</span>
            </strong>
            <br />
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
        </p>
    @endforeach
@endif
