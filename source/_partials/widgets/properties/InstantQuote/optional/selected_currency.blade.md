This setting allows you to define which currency is selected by default when the widget is loaded. This can be
useful when page is designed speciically for a currency.

Another possible use is if customer comes to the widget page via a url which contains a currency code (e.g.
<code>example.com/instant-quote?currency_code=USD</code>). However, you would need to handle reading the currency code
from the url and passing it to the config.

> This must be a valid
<a href="https://en.wikipedia.org/wiki/ISO_4217#Active_codes" target="_blank" title="ISO">ISO 4217</a>
currency code (e.g. <code>USD, EUR, AUD</code>) and it must be a currency you are selling via our service.
