<?php 

function home_page_content() {
	$path = plugin_dir_path(__FILE__);
	$html = "
		
	<!-- wp:image {'align':'center','id':25,'width':600,'height':366,'sizeSlug':'full','linkDestination':'none'} -->
	<figure class='wp-block-image aligncenter size-full is-resized'><img src='http://multisitetwo.local/chooser/wp-content/uploads/sites/124/2023/01/Asset-9800.png' alt='Text saying &quot;find your path&quot; with a wavy orange path pointing downward.' class='wp-image-25' width='600' height='366'/></figure>
	<!-- /wp:image -->

	<!-- wp:paragraph {'fontSize':'large'} -->
	<p class='has-large-font-size'>State U provides you with two main options for building what you want online.  The information below will help you decide which one is right for you!</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns -->
	<div class='wp-block-columns'><!-- wp:column {'style':{'spacing':{'padding':{'top':'var:preset|spacing|30','right':'var:preset|spacing|30','bottom':'var:preset|spacing|30','left':'var:preset|spacing|30'}}},'backgroundColor':'tertiary'} -->
	<div class='wp-block-column has-tertiary-background-color has-background' style='padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)'><!-- wp:image {'align':'center','id':27,'width':160,'height':160,'sizeSlug':'large','linkDestination':'none'} -->
	<figure class='wp-block-image aligncenter size-large is-resized'><img src='http://multisitetwo.local/chooser/wp-content/uploads/sites/124/2023/01/wordpress-1024x1024.png' alt='' class='wp-image-27' width='160' height='160'/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {'textAlign':'center'} -->
	<h2 class='has-text-align-center'>Sites@StateU</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>Sites is a managed version of WordPress. It's the place you want to be if you just want WordPress and your focus is on getting started fast, with as little fuss as possible, in a highly supported environment. </p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {'level':3} -->
	<h3>Perfect for:</h3>
	<!-- /wp:heading -->

	<!-- wp:list -->
	<ul><!-- wp:list-item -->
	<li>getting a WordPress site as easily as possible</li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li>most projects, courses, and simple sites</li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li>people who want a higher level of technical support</li>
	<!-- /wp:list-item --></ul>
	<!-- /wp:list -->

	<!-- wp:heading {'level':3} -->
	<h3>We provide:</h3>
	<!-- /wp:heading -->

	<!-- wp:list -->
	<ul><!-- wp:list-item -->
	<li>plugins and themes carefully selected to meet the needs of most people (<a href='http://multisitetwo.local/chooser/the-plugins-themes-on-sitesstateu/'>see our full list</a>)</li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li>an environment where we manage all the updates and backups</li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li>loving and responsive technical support</li>
	<!-- /wp:list-item --></ul>
	<!-- /wp:list -->

	<!-- wp:buttons -->
	<div class='wp-block-buttons'><!-- wp:button {'backgroundColor':'contrast','textColor':'base','align':'center'} -->
	<div class='wp-block-button aligncenter'><a class='wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button'>Get a new Sites@StateU account</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->

	<!-- wp:column {'style':{'spacing':{'padding':{'top':'var:preset|spacing|30','right':'var:preset|spacing|30','bottom':'var:preset|spacing|30','left':'var:preset|spacing|30'}}}} -->
	<div class='wp-block-column' style='padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)'><!-- wp:image {'align':'center','id':28,'width':400,'height':160,'sizeSlug':'full','linkDestination':'none'} -->
	<figure class='wp-block-image aligncenter size-full is-resized'><img src='http://multisitetwo.local/chooser/wp-content/uploads/sites/124/2023/01/logo-stack800.png' alt='' class='wp-image-28' width='400' height='160'/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {'textAlign':'center'} -->
	<h2 class='has-text-align-center'>Domain of One's Own</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>A Domain of One's Own is your playground on the Internet. This is the place to try different applications and to explore the technologies that run the web. A great place for those who want choice and independence. </p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {'level':3} -->
	<h3>Perfect for:</h3>
	<!-- /wp:heading -->

	<!-- wp:list -->
	<ul><!-- wp:list-item -->
	<li>installing your own apps (Omeka, Drupal, WP, &amp; more)</li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li>building your own site from scratch</li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li>people who value choice over technical support</li>
	<!-- /wp:list-item --></ul>
	<!-- /wp:list -->

	<!-- wp:heading {'level':3} -->
	<h3>We provide:</h3>
	<!-- /wp:heading -->

	<!-- wp:list -->
	<ul><!-- wp:list-item -->
	<li>a set of automated installers for various applications and the room to DIY in a LAMP environment </li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li>an environment where you make the choices and can see the pieces</li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li>limited documentation and limited support</li>
	<!-- /wp:list-item --></ul>
	<!-- /wp:list -->

	<!-- wp:buttons -->
	<div class='wp-block-buttons'><!-- wp:button {'align':'center'} -->
	<div class='wp-block-button aligncenter'><a class='wp-block-button__link wp-element-button'>Get a new Domain of your own</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->";
}