This should be a list of currency codes that you want this widget to show comparisons for.

```js
SPENDOLOGY.RateComparison.new(options).render({
    currencies: [ "EUR", "USD", "AED", /** ... */ ]
});
```

> This must be a an `array` of valid
<a href="https://en.wikipedia.org/wiki/ISO_4217#Active_codes" target="_blank" title="ISO">ISO 4217</a>
currency codes and it must only contain currencies you are selling via our service.
