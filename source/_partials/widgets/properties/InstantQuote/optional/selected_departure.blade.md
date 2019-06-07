This setting allows you to define which departure is selected by default when the widget is loaded. You must enable
the <a href="#{{$group}}_{{$type}}_capture_travel_information" title="Capture travel information">
    "Capture travel information"
</a> setting to show the departure dropdown on this widget.

Another possible use is if customer comes to the widget page via a url which contains a departure (e.g.
<code>example.com/instant-quote?departure=Aug 2019</code>). However, you would need to handle reading the departure
from the url and passing it to the config.

> This must be a valid departure month in the format <code>MMM YYYY</code> and is one of the next 9 months.
