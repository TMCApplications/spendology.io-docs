---
title: Widgets | Examples
description: See what our widgets looked like when correctly configured and styled to match your websites theme.
hidePageMenu: true
hideBackToTop: true
noScroll: true
extends: _layouts.documentation
section: content
---

# Examples
See below for a visual example of each of the widgets we offer.

@include('_partials.widgets.bundle_link')

<p>
    If you extract the ZIP file and open the <code>index.html</code> file in a browser this will load a page with all the widgets
    displayed. Included in the bundle is a <code>spendology_widget.css</code> file edit this to customize the colors to
    match your website and the <code>spendology-widget-config.js</code> is also included use this to configure the widgets
    to just how you want them!.
</p>

<iframe src="/examples/index.html" class="w-full scroll-hidden h-full" onload="resizeIframe(this)"></iframe>

<script>
  function resizeIframe(obj) {
    obj.style.height = (obj.contentWindow.document.body.scrollHeight + 2000) + 'px';
    
    setTimeout(function() {
        obj.style.height = (obj.contentWindow.document.body.scrollHeight + 100) + 'px';
    }, 5000);
  }
</script>
