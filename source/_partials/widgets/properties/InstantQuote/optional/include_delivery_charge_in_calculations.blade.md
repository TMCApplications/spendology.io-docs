If you are using a rate comparison website to drive customers to your platform you can use this setting to calculate quote values using the same method as the majority of comparison websites.
It is common for a comparison site to factor in the delivery charge when determining your ranking, this config option replicates that process.

<blockquote>
This must be a boolean <code>true</code> or <code>false</code> value only. When the config value is <code>true</code> the following changes are made to the quote calculations:
<ul class="list-disc ml-10 text-sm">
    <li>When the customer enters a charge in the local currency, it shows them the quantity in the foreign currency they would receive if the local currency had the charge of delivery removed from it.</li>
    <li>When the customer enters an quantity in the foreign currency, it shows them the charge in the local currency, with the charge of the delivery added to it.</li>
</ul>
</blockquote>
