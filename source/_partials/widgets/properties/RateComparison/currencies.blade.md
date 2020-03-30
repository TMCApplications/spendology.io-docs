This should be a list of currency codes that you want this widget to show comparisons for. The order in which you list 
the currency codes here will also be the order that they display in the currency dropdown menu on the widget.

```js
SPENDOLOGY.RateComparison.new(options).render({
    currencies: [ "EUR", "USD", "AED", /** ... */ ]
});
```

> This must be a an `array` of valid
<a href="https://en.wikipedia.org/wiki/ISO_4217#Active_codes" target="_blank" title="ISO">ISO 4217</a>
currency codes and it must only contain currencies you are selling via our service.

If you want to show all available currencies then you can just pass an empty value or remove the property since it is optional.
```js
SPENDOLOGY.RateComparison.new(options).render({
    currencies: null
});

// ...or
SPENDOLOGY.RateComparison.new(options).render({
    currencies: []
});

// ...or
SPENDOLOGY.RateComparison.new(options).render({});
```
