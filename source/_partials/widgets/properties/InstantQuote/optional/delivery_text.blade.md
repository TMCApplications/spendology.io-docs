Displays underneath the instant quote, but above the
<a href="#{{$group}}_{{$type}}_footer_text" title="Footer text">"Footer text"</a> content. If you do not define this message or leave it
empty then it will not display anything. Please find an example message below:

<pre><code class="language-none language-wrap">{{
    "*We charge £{delivery_charge} for delivery in <strong>two business days</strong> by 1pm."
}}</code></pre>

> The <code>{delivery_charge}</code> placeholder is automatically filled using the configured delivery cost from the
api. Also note that you can put safe <code>html</code> code in the message, for example, to add links or to make
parts of the message bold.
