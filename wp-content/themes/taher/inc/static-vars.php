<?php
/**
 * Custom static variable initialization
 * 
 * @package taher
 */

function sh_var($name) {
	switch ($name) {
		case 'sh_image_dir_relative': return '/assets/img/taher-img/';
		case 'sh_business_address': return '26 Verwood Avenue, Toronto, ON';
		case 'sh_business_phone': return '(647) 802 3592';
		case 'sh_business_email': return 'taherlandscaping@yahoo.ca';
		case 'sh_facebook_link': return 'https://facebook.com';
		case 'sh_twitter_link': return 'https://twitter.com';
		case 'sh_linkedin_link': return 'https://www.linkedin.com';	
		case 'sh_google_analytics': return "
			<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'G-5SFDWV5J3S');
			</script>
		";
		default: return '';
	}
}