---
title: Widgets | Understanding the structure
description: Learn how to construct your widget configuration file
extends: _layouts.documentation
section: content
---

# Understanding the structure # {#widget-configuration}
If you haven't already you should download the example config on the link below.

@include('_partials.widget_config_example_link')

Once you have downloaded the above file open it and use this guide as a breakdown of each part of the config.

<ul class="list-decimal ml-10">
    <li><a href="#widgets-loaded-event-listener">Waiting for the widgets to be downloaded</a></li>
    <li><a href="#widgets-placeholder-check">Check if the expected widget placeholder exists</a></li>
    <li><a href="#widgets-add-config">Configuring your widgets</a></li>
</ul>

### Waiting for the widgets to be downloaded # {#widgets-loaded-event-listener}
The whole config is wrapped in an event listener listening for the `SPENDOLOGY_WIDGETS_LOADED` event. 

```js
window.addEventListener('SPENDOLOGY_WIDGETS_LOADED', function () {
    // ...
});
```

> If you want to know what fires this event then please see the "[How are the widgets loaded?](/docs/how-are-widgets-loaded)" guide.

### Check if the expected widget placeholder exists # {#widgets-placeholder-check}
You should notice that inside the example config file each the widgets and their configurations are wrapped in a check 
to see that the widget placeholder exists on the page.

```js
var instantQuoteId = 'InstantQuote';
if (document.getElementById(instantQuoteId)) {
    // configuration for this widget goes here
}
```

This ensures that the widget configuration and render code is only run if you have put the related placeholder on the
current page.

> If you have entered a custom id for your widget placeholders instead of the defaults in the 
[installation guide](/docs/installing-our-widgets#widgets-step-1), enter those identifiers in at this section for each 
of the widgets in the config.

### Configuring your widgets # {#widgets-add-config}
The final part is adding the configuration settings for your widgets.
 
```js
var liveRateBoardId = 'LiveRateBoard';
if (document.getElementById(liveRateBoardId)) {
    var liveRateBoardOptions = {
        selector: "#" + liveRateBoardId,
        api_url: 'https://api.travelmoney.yourwebsite.com',
        button_url: 'https://app.travelmoney.yourwebsite.com/signup',
        button_text: 'Buy now',
    };
    
    SPENDOLOGY.LiveRateBoard
        .new(liveRateBoardOptions)
        .render({/** Some widgets have render specific settings */});
}
```

All three widgets require a `selector` and `api_url`. The majority of configuration options are passed to the `new` 
method. The actuall render calls all follow this pattern:
 
```js
SPENDOLOGY.WidgetName
    .new({ /** widget config here */})
    .render({ /** possible render config here */});

// Spendology.InstantQuote...
// Spendology.RateComparison...
// Spendology.LiveRateBoard...
```

Please see the below guides with the full list of configuration options for each widget.
<ul class="list-disc ml-10">
    <li><a href="/docs/instant-quote-configuration">Instant quote</a></li> 
    <li><a href="/docs/rates-comparison-configuration">Rate comparison</a></li> 
    <li><a href="/docs/live-rate-board-configuration">Live rate board</a></li> 
</ul> 

> The `render` function is what actually injects the widget into the 
[placeholders](/docs/installing-our-widgets#widgets-step-1). If needed you can call the render method separate from the 
configuration if you need your site to complete a task before rendering: