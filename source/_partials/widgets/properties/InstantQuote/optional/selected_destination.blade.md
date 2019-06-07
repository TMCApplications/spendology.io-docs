This setting allows you to define which destination is selected by default when the widget is loaded. You must enable
the <a href="#{{$group}}_{{$type}}_capture_travel_information" title="Capture travel information">
    "Capture travel information"
</a> setting to show the destination dropdown on this widget.

Another possible use is if customer comes to the widget page via a url which contains a destination (e.g.
`example.com/instant-quote?destination=Australia`). However, you would need to handle reading the destination
from the url and passing it to the config.

> This must be a valid country name which exists in our list of countries.
