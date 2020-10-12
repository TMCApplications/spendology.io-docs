If this config is set then it will use the value as the name of the currency code parameter on the specified button URL.
For example, if the `button_url` was set to `https://example.com`,  this config was set as `currency` and the selected 
currency was `EUR` then the url when you click the button would take you to `https://example.com?currency=EUR`. 

The currency code is from the rates that are displayed. If the selected currency is unavailable and instead an alternate
or default currency is displaying then it will use that as the currency code instead. 

> The value should be a string containing only alphabetical characters and underscores.
