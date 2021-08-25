Displays underneath the instant quote, but above the
<a href="#{{$group}}_{{$type}}_footer_text" title="Footer text">"Footer text"</a> content. If you do not define this message or leave it
empty then it will not display anything. Please find an example message below:

<pre><code class="language-none language-wrap">{{
    "*We charge {base_currency_symbol}{delivery_charge} for delivery in <strong>two business days</strong> by 1pm."
}}</code></pre>

<ul class="list-disc ml-10">
    <li><code>{base_currency_symbol}</code>: The currency symbol (e.g. <code>$, £</code> etc.) of the base currency for your site.</li>
    <li><code>{delivery_charge}</code>: The configured delivery cost for your default delivery type.</li>
</ul>

> Note that you can put safe `html` code in the message, for example, to add links or to make
parts of the message bold.
