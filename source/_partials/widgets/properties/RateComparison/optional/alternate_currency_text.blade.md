This message will display instead of the <a href="#{{$group}}_{{$type}}_results_message" title="Saving message">"Saving message"</a> when the selected currency
is either not enabled, suspended or has no rate data available. If the selected currency has an FCO recommended alternative then the rates displayed 
will be shown for that currency and this message will be displayed. 

In the default, after all the place holders are replaced, this message would say something like:

<pre><code class="language-none language-wrap">{{
    "Vietnamese Dong (VND) is not currently available so we are showing the FCO recommended alternative, US Dollars (USD)."
}}</code></pre> 

<blockquote>
The placeholders allow you to insert dynamic data into the message. Please find a list of the available
placeholders below:

<ul class="list-disc ml-10">    
    <li><code>{alternate_currency_code}</code>: The ISO code of the alternate currency.</li>
    <li><code>{alternate_currency_name}</code>: The name of the alternate currency.</li>
    <li><code>{alternate_currency_url}</code>: The FCO link showing the alternate currency is recommended.</li>
    <li><code>{target_currency_code}</code>: The ISO code of the selected currency.</li>
    <li><code>{target_currency_name}</code>: The name of the selected currency.</li>
</ul>

The configuration value must be a string only but can contain `html` code.
</blockquote>
