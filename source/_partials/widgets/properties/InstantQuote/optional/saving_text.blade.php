If you want to display a savings comparison with the high street on this widget then you will need to put a message as
the value of this configuration setting. See example message below:

<pre><code class="language-none language-wrap">{{
    "Spending £{cost} at {target_currency_symbol}{rate} you will save £{saving_amount}. If you bought the same amount of {target_currency_code} from {competitor_name} it would cost you £{competitor_cost} at their  rate of {target_currency_symbol}{competitor_rate}."
}}</code></pre>

Which after all the place holders are replaced this message would say something like:

<pre><code class="language-none language-wrap">{{
    "Spending £100 at $1.3000 you will save £15. If you bought the same amount of USD from the Post Office it would cost you £115 at their  rate of $1.2500."
}}</code></pre>

<blockquote>
    The placeholders allow you to insert dynamic data into the message. Please find a list of the available
    placeholders below:

    <ul class="list-disc ml-10">
        <li><code>{cost}</code>: This is the amount in GBP that the customer has entered into the form.</li>
        <li><code>{rate}</code>: This is the current rate of the currency the customer has selected.</li>
        <li><code>{target_amount}</code>: This is the amount of currency the customer will purchase.</li>
        <li><code>{target_currency_symbol}</code>: The currency symbol (e.g. <code>$, £</code>) etc.) of the currency the customer has selected.</li>
        <li><code>{target_currency_code}</code>: The currency code (e.g. <code>USD, EUR</code>) etc.) of the currency the customer has selected.</li>
        <li><code>{saving_amount}</code>: The amount the customer will save compared to the high street with the entered form values.</li>
        <li><code>{competitor_name}</code>: The name of the company who we have compared the rate with to calculate the saving amount.</li>
        <li><code>{competitor_cost}</code>: The amount it would cost the customer if they had bought this currency with the comparison company.</li>
        <li><code>{competitor_rate}</code>: The rate the comparison company is currently offering to its customers.</li>
    </ul>

    The configuration value must be a string only and not contain any <code>html</code> code.
</blockquote>
