---
title: Widgets | Understanding the structure
description: "The widget configuration file allows you to customise the widgets to meet your needs down to the finest of
details. From displaying banners to controlling the websites customers are directed to when clicking the buttons and
links on the widgets."
pageItems:
    widgets-loaded-event-listener: Waiting for the widgets to be downloaded
    widgets-global-configuration: Global configuration
    widgets-placeholder-check: Check if the expected widget placeholder exists
    widgets-add-config: Configuring your widgets
extends: _layouts.documentation
section: content
---

# Understanding the structure # {#widget-configuration}
{{$page->description}}

If you haven't already you should download the example bundle using the link below.

@include('_partials.widgets.bundle_link')

Once you have downloaded the above file open it and use this guide as a breakdown of each part of the config.

@include('_partials.page_menu_medium')

<hr class="divider" />

### Waiting for the widgets to be downloaded # {#widgets-loaded-event-listener}
The whole config is wrapped in an event listener listening for the `SPENDOLOGY_WIDGETS_LOADED` event.

```js
window.addEventListener('SPENDOLOGY_WIDGETS_LOADED', function () {
    // ...
});
```
---
### Global configuration # {#widgets-global-configuration}
Global configuration allows you to set options for your widgets once, that will influence how all of your widgets work.

> **IMPORTANT!** This function must be called before any widgets below but also must be placed within the `SPENDOLOGY_WIDGETS_LOADED`
event listener described above.

How to retrieve the values to pass to the configuration is under your control, typical scenarios you could implement are to:

*  Use a value from the query string
*  Use a value from a cookie set in the users browser
*  Use a value from your authentication

```js
SPENDOLOGY.Config({
    agentReference: '{agent reference}',
    packageReference: '{package reference}',
    referralCode: '{referral code}',
});
```
> **Note** If you are unsure as to what parameter values are configured for your installation, please contact support.

**agentReference**

This should be set to match an existing agents reference.

When set any redirection from the Instant Quote widget to your App will automatically include the agents reference, this will ensure that attribution for any orders created by the customer goes to the agent.

**packageReference**

This should be set to match an existing packages reference.

When set any exchange rates that are retrieved by your widgets for display to the customer will be from the rate book configured against the package, when a customer is redirected from the Instant Quote widget to your App they will also automatically be allocated the package during signup.

**referralCode**

This should be set to match an existing referral code of any of your affiliates.

When set any exchange rates that are retrieved by your widgets for display to the customer will be from the rate book configured against the affiliate, when a customer is redirected from the Instant Quote widget to your App they will also have access to the exchange rates configured for your affiliate.

> **Note** If you pass both a referral code and a package reference the exchanges rates from the referral code will take precedence.

---
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
[installation guide](/docs/installing-our-widgets#widgets-step-1), enter those identifiers in this section for each
of the widgets in the config.

---
### Configuring your widgets # {#widgets-add-config}
The final part is adding the configuration settings for your widgets.

```js
var liveRateBoardId = 'LiveRateBoard';
if (document.getElementById(liveRateBoardId)) {
    var liveRateBoardOptions = {
        selector: "#" + liveRateBoardId,
        api_url: 'https://api.abc.spendology.cloud',
        button_url: 'https://app.travelmoney.yourwebsite.com/signup',
        button_text: 'Buy now',
    };

    SPENDOLOGY.LiveRateBoard
        .new(liveRateBoardOptions)
        .render({/** Some widgets have render specific settings */});
}
```

All three widgets require a `selector` and `api_url`. The majority of configuration options are passed to the `new`
method. All widget render calls follow this pattern:

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
