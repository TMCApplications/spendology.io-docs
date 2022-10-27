If you want to display a savings comparison with the default package on this widget then you will need to put a message as
the value of this configuration setting. This will not display if the current rates being used in the widget are already from the default package. 

See example message below:
<pre><code class="language-none language-wrap">{{
"If you buy {base_currency_symbol}{cost} of {target_currency_code} at our special rate of {target_currency_symbol}{rate} you would receive {target_currency_symbol}{target_amount}. If you bought the same amount of {target_currency_code} at our standard rate of {target_currency_symbol}{default_rate} it would cost {base_currency_symbol}{default_cost} saving you {base_currency_symbol}{saving_amount}."
}}</code></pre>

Which after all the placeholders are replaced this message would say something like:

<pre><code class="language-none language-wrap">{{
    "If you buy £750 of EUR at our special rate of €1.1324 you would receive €849.30. If you bought the same amount of EUR at our standard rate of €1.1041 it would cost £769.22 saving you £19.22."
}}</code></pre>

<blockquote>
The placeholders allow you to insert dynamic data into the message. Please find a list of the available
placeholders below:

<ul class="list-disc ml-10">
    <li><code>{base_currency_symbol}</code>: The currency symbol (e.g. <code>$, £</code> etc.) of the base currency for your site.</li>
    <li><code>{cost}</code>: This is the amount in your base currency (e.g. <code>USD, GBP</code> etc.) that the customer has entered into the form.</li>
    <li><code>{default_cost}</code>: The amount it would cost the customer if they had bought this currency with the default package rate.</li>
    <li><code>{default_rate}</code>: The rate the default package is currently offering to its customers.</li>
    <li><code>{rate}</code>: This is the current rate of the currency the customer has selected.</li>
    <li><code>{saving_amount}</code>: The amount the customer will save compared to the default package with the entered form values.</li>
    <li><code>{target_amount}</code>: This is the amount of currency the customer will purchase.</li>
    <li><code>{target_currency_symbol}</code>: The currency symbol (e.g. <code>$, £</code> etc.) of the currency the customer has selected.</li>
    <li><code>{target_currency_code}</code>: The currency code (e.g. <code>AED, EUR</code> etc.) of the currency the customer has selected.</li>
</ul>

The configuration value must be a string only and not contain any <code>html</code> code.
</blockquote>
<blockquote>
If you also configure <a href="#{{$group}}_{{$type}}_saving_text_comparison_rate" title="Comparison amount">"Saving text (Comparison rate)"</a> then that message will be used if the selected currency has comparison rates. 
If the selected currency does not have any comparison data then this message will be used.
</blockquote>
