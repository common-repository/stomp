=== Stomp ===
Contributors: numeeja
Donate link: https://cubecolour.co.uk/wp
Tags: footer, short, content, fix, static
Requires at least: 4.5
Tested up to: 6.5
Stable tag: 1.0.1
License: GPLv2

== Description ==

Stomps the footer element to the bottom of the visible page on short pages.

#### Usage:

When the height of the document body is less than the internal height of the browser window, this plugin prevents a gap appearing between the footer element and the bottom of the visible page by fixing the footer to the bottom of the page.

If the plugin does not have any effect on the footer of any short pages, this may be due to your footer not being marked up as an HTML5 'footer' element. It may have instead been marked up as another element such as a div with a class or id of 'footer', 'site-footer', or something else.

If this is the case you can add a constant to define the CSS selector for your footer element by editing your *wp-config.php* by adding the line:

`define( 'STOMP_FOOTER_ELEMENT', '.site-footer' );`

before the line:

`/* That's all, stop editing! Happy blogging. */`

In this example the value of *STOMP_FOOTER_ELEMENT* is '.site-footer'


== Installation ==

1. Upload the plugin folder to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where is the admin page? =

There are no options in this plugin, so there isn't an admin page.

= Why doesn't it work on my site? =

If this plugin is not working for you, this could be due to

* your theme not being built to WordPress standards
* a conflict with another plugin
* The element on your site that looks and acts as a footer is not actually an HTML5 'footer' element. In this case read the documentation for instructions to change the element the plugin acts on.

Please ask for help on the [plugin support page on WordPress.org](https://wordpress.org/support/plugin/stomp "Stomp plugin support page on WordPress.org").

The plugin does work as it is designed to on all of the sites it has been tested on, however it is not possible for me to test on every available theme and with all combinations of other plugins active. If the plugin is not working for you as you expect it to, please read the documentation carefully to check that you are using it correctly. Then review the topics in the [plugin support forum](https://wordpress.org/support/plugin/stomp/ "Stomp plugin support forum"). You may find an appropriate solution outlined in a resolved topic if someone had the same or a similar issue. If you do not find an answer that enables you to solve your issue, please post a new topic on the forum so we have an opportunity to get it working before you consider leaving a review.

= Why do I need to edit the wp-config.php to specify the selector of my footer element? A setting would be easier =

A well-made modern theme should be using semantic elements and for anyone using one of these themes a setting would not be required. The workaround to specify a different element was included for anyone using a theme that does something different.

= What levels of support are available? =

I offer free forum support for free cubecolour plugins. For free support all communication must take place on the WordPress.org forums and a link to your site must be provided where I can I can see the issue without needing any kind of password.

Non-free support via email is also available if the free support is not compatible with the level of support you require. Paid support via email can be requested at: [cubecolour.co.uk/premium-support](https://cubecolour.co.uk/premium-support "cubecolour.co.uk/premium-support")

If your theme is doing something unusual which prevents the plugin working, and it still does not work after defining a value for STOMP_FOOTER_ELEMENT, you may require a custom version of the stomp plugin specific to your theme. Creating this for you is outside the scope of the free support that I am able to provide, however a custom version of the plugin can be commissioned as a paid job by sending your request via the [premium support page](https://cubecolour.co.uk/premium-support "premium support page").

= I am using the plugin and it has saved me time and/or money. How can I show my appreciation? =

You can donate any amount via [my donation page](https://cubecolour.co.uk/wp/ "cubecolour donation page"). All donations are gratefully received. If you find the plugin useful I would also appreciate a glowing five star review on the [plugin review page](https://wordpress.org/support/view/plugin-reviews/stomp?rate=5#postform "Stomp plugin review page")

== Screenshots ==

1. Without this plugin active, and when the content is short, the footer floats above the bottom of the page looking rather silly.

2. With this plugin active, and when the content is short, the footer is pushed down to the bottom of the browser window.

3. When the content is long, the footer keeps its default position so offscreen on page load&hellip;

4. And will be visible on scrolling down as normal.

== Changelog ==

= 1.0.1 =
* Initial Version

== Upgrade Notice ==

= 1.0.1 =
* Initial Version