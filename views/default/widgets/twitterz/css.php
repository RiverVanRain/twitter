<?php 
/**
	 * Elgg Twitter Widgets Pack plugin
	 *
	 * @package Elgg Twitter Widgets Pack
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author RiverVanRain
	 * @URL http://o.wzm.me/crewz/p/1983/personal-net
	 * @copyright (c) RiverVanRain 2014
	 */
?>
.hide { position: absolute; top: -9999px; left: -9999px; }
#twitztab { background: transparent; padding: 10px; margin: 0 0 20px 0; -moz-box-shadow: 0 0 5px #666; -webkit-box-shadow: 0 0 5px #666; }

#twitztab .nav { overflow: hidden; margin: 10px; }
#twitztab .nav li { width: 97px; float: left; margin: 0 10px 0 0; }
#twitztab .nav li.last { margin-right: 0; }
#twitztab .nav li a { display: block; padding: 5px; background: #959290; color: white; font-size: 10px; text-align: center; border: 0; }
#twitztab .nav li a:hover { background-color: #111; }

#twitztab ul { list-style: none; }
#twitztab ul li a { display: block; border-bottom: 1px solid #666; padding: 4px; color: #666; }
#twitztab ul li a:hover { background: #fe4902; color: white; }
#twitztab ul li:last-child a { border: none; }

#twitztab ul li.nav-one a.current, #twitztab ul#timeline li a:hover { background-color: #0575f4; color: white; }
#twitztab ul li.nav-two a.current, #twitztab ul#favorites li a:hover { background-color: #d30000; color: white; }
#twitztab ul li.nav-three a.current, #twitztab ul#list li a:hover { background-color: #8d01b0; color: white; }
#twitztab ul li.nav-four a.current, #twitztab ul#search li a:hover { background-color: #FE4902; color: white; }
