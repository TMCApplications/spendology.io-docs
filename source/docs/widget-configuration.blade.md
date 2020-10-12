---
title: Widgets | Understanding the structure
description: "The widget configuration file allows you to customise the widgets to meet your needs down to the finest of 
details. From displaying banners to controlling the websites customers are directed to when clicking the buttons and 
links on the widgets."
pageItems:
    widgets-loaded-event-listener: Waiting for the widgets to be downloaded
    widgets-save-referral-code: Save referral code
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
### Save referral code # {#widgets-save-referral-code}
If you do not plan to use comparison websites to attract customers to your currency services then you can skip this section.
Comparison sites will provide a referral code on the website address when linking to your website. We will need access to this 
within the currency order application we provide in order to track purchases for each referral provided.  

In order to facilitate this we provide a `saveReferralData` function which will look for the provided parameter on the URL 
(e.g. `?referral_code=ABC1234`). This function will save it as a cookie so that when they eventually get directed to the 
application from your marketing site we are able to record if a comparison site has successfully referred a customer when 
they place an order.
 
```js
SPENDOLOGY.saveReferralData('<your website domain>', '<url parameter>')
```

> **IMPORTANT!** This function must be called before any widgets below but also must be placed within the `SPENDOLOGY_WIDGETS_LOADED`
event listener described above.

Note that the first argument to this function requires you to put in the base domain that is shared between your marketing 
website, and the currency order application. For example, if your marketing website is at `https://yourcompany.com`, and the 
application is at `https://travelmoney.yourcompany.com` then the shared domain between the two is `yourcompany.com`. 

However, in order for our app to be able to read a cookie that was saved on your marketing site you will need to prefix the 
domain with a full stop `.`. Once you have put in your domain and expected URL parameter similar to the below code then 
if you go to `yourcompany.com?referral_code=123456` the cookie should get saved.

```js
SPENDOLOGY.saveReferralData('.yourcompany.com', 'referral_code')
```

> **Alternatively** you can pass a referral code to the Instant Quote widget configuration using the  `referral_code` property 
[here](/docs/instant-quote-configuration/#render_optional_referral_code). 

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
