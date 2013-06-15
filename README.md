# wp-debug-html

wp-debug-html is a WordPress wrapper for the excellent [HTML
Inspector](https://github.com/philipwalton/html-inspector/), written by
Philip Walton.

The HTML Inspector is a JavaScript project that gives you the ability to
validate your HTML on each page load. This makes the process automatic,
but also means that you can look for things that aren't caught by other
validators — such as redundant classes that aren't used in your CSS, or
inline event handlers.

wp-debug-html only runs when `WP_DEBUG` is set to true, so it won't slow
down your production site.
