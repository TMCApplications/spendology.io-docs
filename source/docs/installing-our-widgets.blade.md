---
title: Widgets Installation Guide
description: Adding our widgets to your website is easy peasy.
extends: _layouts.documentation
section: content
---

# Installing our widgets {#installing-our-widgets}

There are four easy steps to adding our widgets to your site. 
All of these steps must be completed in order for a successful installation.

<ul class="list-decimal ml-10">
    <li><a href="#widgets-step-1">Step 1 - Adding the widget placeholders to your website</a></li>
    <li><a href="#widgets-step-2">Step 2 - Add our javascript to your site</a></li>
    <li><a href="#widgets-step-3">Step 3 - Configuring your widgets</a></li>
    <li><a href="#widgets-step-4">Step 4 - Styling your widgets</a></li>
</ul> 

### Step 1 - Adding the widget placeholders to your website # {#widgets-step-1}
On your website where you want the widgets to display add the below html snippets.

> The element identifiers (id) can be customised in the configuration file described in [Step 3](#widgets-step-3).

##### Instant Quote
```html
<div id="InstantQuote"></div> 
```

##### Rate Comparison
```html
<div id="RateComparison"></div> 
```

##### Live Rate Board
```html
<div id="LiveRateBoard"></div> 
```

### Step 2 - Add our javascript to your site. # {#widgets-step-2}
Highlight and copy all of the content in the block below. After you have successfully done this paste it into the `<head>` tag of your website.
```html
<script>
!function(){var e=document.createElement("script");document.getElementsByTagName("body")[0].appendChild(e),e.setAttribute("src","https://widget.spendology.io/v3/loader.min.js?"+(new Date).getTime())}();
</script>
```
> If you are interested in what this code does please [click here](/docs/how-are-widgets-loaded) to find out.

### Step 3 - Configuring your widgets # {#widgets-step-3}

We allow our widgets to be configured to just how you want them. 

@include('_partials.widget_config_example_link')

Once you have changed the configuration to meet your requirements you should also add this into the `<head>` tag of your website.

```html
<script src="//yourwebsite.com/js/spendology-widget-config.js" />
```

For more information on how to configure the available widgets please see the below guides:
<ul class="list-disc ml-10">
    <li><a href="/docs/widget-configuration">Understanding the structure</a></li>
    <li><a href="/docs/instant-quote-configuration">Instant quote</a></li> 
    <li><a href="/docs/rates-comparison-configuration">Rate comparison</a></li> 
    <li><a href="/docs/live-rate-board-configuration">Live rate board</a></li> 
</ul> 

### Step 4 - Styling your widgets # {#widgets-step-4}
Someone from your company should be assigned this step who has some knowledge of website design as this step will dive into the world of styling through a programming language called `CSS`.

<a href="/examples/spendology-widgets.css" target="_blank" download>Click to download an example CSS stylesheet file</a>

Once you have changed the styelsheet to meet your requirements you should also add this into the `<head>` tag of your website.

```html
<link rel="stylesheet" href="//yourwebsite.com/css/spendology-widgets.css" />
```

For more information on how to style the available widgets please see the below guides:
<ul class="list-disc ml-10">
    <li><a href="/docs/widget-styling">Before you start</a></li>
    <li><a href="/docs/styling-components">Components</a></li> 
    <li><a href="/docs/styling-typography">Typography</a></li> 
</ul> 
