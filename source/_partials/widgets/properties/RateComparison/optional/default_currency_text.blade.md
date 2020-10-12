This message will display instead of the <a href="#{{$group}}_{{$type}}_results_message" title="Saving message">"Saving message"</a> when the selected currency
is either not enabled, suspended or has no rate data available. 

If the selected currency does not have a fco recommended alternative, or the alternative  is also unavailable, then the 
rates displayed will be shown for the currency that appears top in the select dropdown and this message will be displayed. 

In the default, after all the place holders are replaced, this message would say something like:

<pre><code class="language-none language-wrap">{{
    "Brazilian Real (BRL) is not currently available and there is no FCO recommended alternative so we are showing you our most popular currency, Euro (EUR)."
}}</code></pre>

<blockquote>
The placeholders allow you to insert dynamic data into the message. Please find a list of the available
placeholders below:

<ul class="list-disc ml-10">    
    <li><code>{default_currency_code}</code>: The ISO code of the default currency.</li>
    <li><code>{default_currency_name}</code>: The name of the default currency.</li>
    <li><code>{target_currency_code}</code>: The ISO code of the selected currency.</li>
    <li><code>{target_currency_name}</code>: The name of the selected currency.</li>
</ul>

The configuration value must be a string only but can contain `html` code.
</blockquote>
