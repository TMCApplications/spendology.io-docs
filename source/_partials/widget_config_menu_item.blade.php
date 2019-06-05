@if(count($properties))
    <li>
        <a href="#{{$group}}-type-{{$type}}">{{ucfirst($type)}}</a>
        <ul class="list-disc ml-10">
            @foreach($properties as $propertyName => $property)
                <li><a href="#{{$group}}_{{$type}}_{{$propertyName}}">{{$property->displayName}}</a></li>
            @endforeach
        </ul>
    </li>
@endif
