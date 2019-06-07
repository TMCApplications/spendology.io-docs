This allows you to run your own javascript code before the widget redirects the customer to the configured
<a href="#{{$group}}_required_button_url" title="Button url">
    "Button url"
</a>.

```js
{
    onSubmit: function(submitInstantQuote) {
        submitInstantQuote()
    }
}
```

> This must be a valid callable function. The function is passed a callback which when called will redirect the user
to the configured url mentioned previously.
