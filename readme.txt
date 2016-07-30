=== ec-blocks ===
Contributors: Sirus
Donate link: http://devchakra.com
Tags: expand collapse, show expand collapse on a post, expand collapse block on a page
Requires at least: 3.0.1
Tested up to: 4.5.3
Stable tag: 4.5.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plug-in for easily creating expand collapse blocks on page or post.

== Description ==

This Plug-in will help for creating blocks which could collapse or expand by just using few tags and rest will be taken care by this plug-in. Very easy to use but first follow the installation instructions before using it.

Demo: http://devchakra.com/magazine/sirus-notes/sirus-july-2016-notes/ec-blocks/
Example Source Code: https://github.com/sirusdas/Expand-Collapse-Blocks/blob/master/example/ec-block.txt


== Installation ==

1. Install the AddQuickTag(https://wordpress.org/plugins/addquicktag/) plug-in for using this plug-in with ease.
2. Then Download this file https://github.com/sirusdas/Expand-Collapse-Blocks then unzip it.
3. Go to AddQuickTag Settings and import the file name "addquicktag.-07-30-2016.json" which is in the unzipped folder.
4. Download this plug-in and activate it. 

NOTE: Automatic Paragraph wont work when this plug-in is installed. 


== Frequently Asked Questions ==

= How to use this plugin =

Suppose for eg:
Apple types
1. RED
2. GREEN
3. Blue

Now to put this in the Collapse Block you just need to do this

<div class="shb">
Apple types<a class="sh0">+</a>
<sh>
1. RED
2. GREEN
3. Blue
</sh>
</div>

NOTE: If Apple types is inside header tag like 
For <h1>Apple types</h1> then <a class="sh1">+</a>
	<h2>Apple types</h2> then <a class="sh2">+</a>
	<h3>Apple types</h3> then <a class="sh3">+</a>
	<h4>Apple types</h4> then <a class="sh4">+</a>
	<h5>Apple types</h5> then <a class="sh5">+</a>
	<h6>Apple types</h6> then <a class="sh6">+</a>

	But you don't need to write this much if you follow the installation instruction properly you will get all this as buttons on your editor.
	Which will be named as 
	For "<div class="shb">"   => Named as "NOTE"
	For "<a class="sh0,sh1,..">+</a>" => Named as "Button", "h1 Button", "h2 Button", "h3 Button", "h4 Button", "h5 Button", "h6 Button"
     
    Use buttons with respect to Header tag previous to it. When no Header tag is previous to it then use just use "Button".

NOTE: "<a class="wpe-button sh0 wpe-button-white">+</a><sh>"	<sh> tag must follow the <a> tag else the drop-down wont work.


== Screenshots ==

1. /assets/screenshot-1.jpg

2. /assets/screenshot-2.jpg

== Changelog ==

= 0.1 =
Stable and Working !!!

== Arbitrary section ==



== A brief Markdown Example ==

Ordered list:

1. Easy Collapse and Expand Block
2. AddQuickTags Plug-in can be used for ease.


`<?php code(); // goes in backticks ?>`
