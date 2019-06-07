Displays underneath the instant quote below the
<a href="#{{$group}}_{{$type}}_delivery_text" title="Delivery text">"Delivery text"</a> content. If you do not define this message or leave it
empty then it will not display anything. Please find an example message below:

<pre><code class="language-none language-wrap">{{
    "We take your privacy very seriously and promise never to share data without your consent. Take a look at our"
    . "\n<a href=\"#privacy_policy\">privacy policy</a> for more information"
}}</code></pre>

Commonly this is used to display a link to your privacy policy and to add other disclaimers about the "Instant Quote"
widget.

<blockquote>
    <p>
        You can put safe <code>html</code> code in the message, for example, to add links or to make parts of the
        message bold.
    </p>

    <div>
        Additionally, here are some other disclaimers we usually include in this message:
        <ul class="list-disc ml-10 text-sm">
            <li>Please note that we always round the foreign currency to the lowest available denomination.</li>
            <li>The exchange rate shown is constantly updated with the latest market data so costs may go up and down.</li>
        </ul>
    </div>
</blockquote>
