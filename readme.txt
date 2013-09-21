=== Surbma - Twitter Bootstrap ===
Contributors: Surbma
Donate link: http://surbma.com/
Tags: twitter bootstrap, twitter, bootstrap
Requires at least: 3.1
Tested up to: 3.3
Stable tag: 20120529

Use Twitter Bootstrap styles on your site

== Description ==


= Further Reading =
For more info, check out the following articles:

* [WordPress SEO - The definitive Guide by Yoast](http://yoast.com/articles/wordpress-seo/).
* Once you have great SEO, you'll need the [best WordPress Hosting](http://yoast.com/articles/wordpress-hosting/).
* The [WordPress SEO Plugin](http://yoast.com/wordpress/seo/) official homepage.
* Other [WordPress Plugins](http://yoast.com/wordpress/) by the same author.
* Follow Yoast on [Facebook](https://facebook.com/yoastcom) & [Twitter](http://twitter.com/yoast).

== Installation ==

1. Upload the `wordress-seo` folder to the `/wp-content/plugins/` directory
1. Activate the WordPress SEO plugin through the 'Plugins' menu in WordPress
1. Configure the plugin by going to the `SEO` menu that appears in your admin menu

== Frequently Asked Questions ==

= The SEO title output for the plugin doesn't work as expected =

You've set up a template for your titles, but things get added to it when they're output? You can do two things: either enable "Force rewrite titles" on the SEO -> Titles settings page, or go into your header.php and change the title element to just this:

`<title><?php wp_title(''); ?></title>`

== Screenshots ==

1. The WordPress SEO plugin general meta box. You'll see this on edit post pages, for posts, pages and custom post types.
2. Some of the sites using this WordPress SEO plugin.
3. The WordPress SEO settings for a taxonomy.
4. The fully configurable XML sitemap for WordPress SEO.
5. Easily import SEO data from All In One SEO pack and HeadSpace2 SEO.
6. Example of the Linkdex Page Analysis functionality.
7. The advanced section of the WordPress SEO meta box.

== Changelog ==

= 20120529 =

* First stable version.

== Other Notes ==

= Usage guides =

* WP Beginner has written a good guide on [how to install and setup WordPress SEO](http://www.wpbeginner.com/plugins/how-to-install-and-setup-wordpress-seo-plugin-by-yoast/)
