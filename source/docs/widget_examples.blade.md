---
title: Widget examples
description: Examples of configured and styled widgets.
hidePageMenu: true
hideBackToTop: true
noScroll: true
extends: _layouts.documentation
section: content
---

# Examples
See below for a visual example of each of the widgets we offer.

@include('_partials.widgets.bundle_link')

<iframe src="/examples/index.html" class="w-full scroll-hidden h-full" onload="resizeIframe(this)"></iframe>

<script>
  function resizeIframe(obj) {
    obj.style.height = (obj.contentWindow.document.body.scrollHeight + 1500) + 'px';
    
    setTimeout(function() {
        obj.style.height = (obj.contentWindow.document.body.scrollHeight + 100) + 'px';
    }, 2000);
  }
</script>
