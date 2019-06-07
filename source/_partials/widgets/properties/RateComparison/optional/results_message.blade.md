If you want to display a savings comparison with the high street on this widget then you will need to put a message as
the value of this configuration setting. See example message below:

<pre><code class="language-none language-wrap">{{
    "Get this £{saving} right now when exchanging £{comparison_amount}."
}}</code></pre>

Which after all the place holders are replaced this message would say something like:

<pre><code class="language-none language-wrap">{{
    "Get this £27.32 right now when exchanging £2500"
}}</code></pre>

<blockquote>
The placeholders allow you to insert dynamic data into the message. Please find a list of the available
placeholders below:

<ul class="list-disc ml-10">    
    <li><code>{saving}</code>: The amount the customer will save compared to the high street with the entered form values.</li>
    <li>
        <code>{comparison_amount}</code>: The value that we used to calculate the savings taken from the configured 
        <a href="#{{$group}}_{{$type}}_comparison_amount" title="Comparison amount">"Comparison amount"</a>.
    </li>
</ul>

The configuration value must be a string only and not contain any `html` code.
</blockquote>
