<?php 
/**
 * Fixes/tweaks
 */

?>
.elgg-icon {vertical-align:middle}
dl, dt, dd {margin:0;padding:0}

/* PROFILE */
.elgg-profile {
	display:block;
}

.elgg-profile > dt {
	float: left;
	width: 120px;
	font-weight:bold;
	color: #999;
	padding: 10px 0;
}
	
.elgg-profile > dd {
	padding: 10px 0 10px 120px;
}

.elgg-profile > dd ~ dd {
	border-top: 1px solid #E9E9E9;
}

.elgg-profile > dd + dd {
	padding-left: 0;
	margin-left: 120px;
}

img {max-width:100%}

#groups-tools > .elgg-module {
	width: 229px;
}

#facebook-topbar-logo {
	margin-top: -4px;
	font-size: 20px;
	color: white;
	text-shadow: 0px 0px 1px lightBlue;
	width: 100px;
	text-align:center;
}

#facebook-header-logo a {
	color: white;
	text-decoration:none;
	font-size: 2.5em;
}

/* Image-less triangle.  Woot. */
.elgg-nub {position:relative}

.elgg-nub:before {
	width: 0px;
	height: 0px;
	font-size: 0px;
	line-height: 0px;
	display: block;
	clear: both;
	content: " ";
	position: absolute;
}

.elgg-nub-tl {
	padding-top: 5px;
}

.elgg-nub-tl:before {
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 5px solid #EDEFF4;
	top: 0px;
}

.elgg-nub-tl:before {
	left: 15px;
}

.elgg-river-participation,
li.elgg-river-participation {
	background-color: #EDEFF4;
	border-bottom: 1px solid #E5EAF1;
	margin-bottom: 2px;
	padding: 4px;
}

.elgg-actor-name {
	font-weight: bold;
}

.elgg-form-small input,
.elgg-form-small textarea {
	font-size: 11px;
}

.elgg-river-summary {
	font-weight: normal;
	font-size: 11px;
	color: gray;
}

.elgg-river-attachments {
	border-left: 2px solid #CCC;
	margin: 8px 0 5px 0;
	padding-left: 5px;
	color: #777;
}

.elgg-image-block-small > .elgg-image {
	margin-right: 5px;
}

.elgg-river-subject,
.elgg-river-target {
	font-weight: bold;
}


/* NEW PAGE COMPONENT: COMPOSER */

.ui-tabs-hide {
	display:none;
}

.elgg-composer {
	border-top: 1px solid #CCC;
	padding-top: 6px;
	margin-top: 7px;
}

.elgg-composer > h4 {
	height: 22px;
	display: inline-block;
	vertical-align: baseline;
	color: gray;
}

.elgg-composer > .ui-tabs-panel {
	margin-top: 5px;
	border: 1px solid #B4BBCD;
	padding: 10px;
}

.elgg-menu-composer {
	display:inline-block;
	height: 22px;
}

.elgg-menu-composer > li {
	font-weight:bold;
	padding-left: 10px;
}

.elgg-menu-composer > li > a {
	line-height: 16px;
}

.elgg-menu-composer > li > a:hover {
	text-decoration: underline;
}

.elgg-menu-composer > li.ui-state-active > a {
	cursor: default;
	color: black;
	text-decoration: none;
}

.elgg-menu-composer > .ui-state-active > a:before,
.elgg-menu-composer > .ui-state-active > a:after {
	position: absolute;
	display: block;
	border-width: 8px;
	border-style: solid;
	content: " ";
	height: 0;
	width: 0;
	left: 0;
}

.elgg-menu-composer > .ui-state-active > a:before {
	top: 11px;
	border-color: transparent transparent #B4BBCD transparent;
}

.elgg-menu-composer > .ui-state-active > a:after {
	top: 12px;
	border-color: transparent transparent white transparent;
}


.messageboard-input {
	margin-bottom: 5px;
}

.elgg-attachment-description {
	margin-top: 5px;
}

#thewire-form-composer #thewire-textarea {
	margin-top:0;
}

.messageboard-input {
	height: 60px;
}

#facebook-header-login {
	right: 0;
	position: absolute;
	bottom: 15px;
}

#facebook-header-login label {
	color:white;
	font-weight: normal;
	padding: 2px 2px 4px;
	display: block;
}

#facebook-header-login input[type="submit"] + label {
	color: #98A9CA;
	position:absolute;
	left: 0;
	bottom: -3px;
	cursor: pointer;
}

#facebook-header-login div {
	display: inline-block;
	padding-right: 10px;
	margin-bottom: 3px;
}

#facebook-header-login .elgg-input-text,
#facebook-header-login .elgg-input-password {
	padding: 3px 3px 4px;
	color: black;
	width: 150px;
	border-color: #1D2A5B;
	margin:0;
	font-size:11px;
}

#facebook-header-login .elgg-menu {
	margin-left: 166px;
}

#facebook-header-login .elgg-menu > li > a {
	color: #98A9CA;
}

#facebook-header-login .elgg-menu > li > a:hover {
	text-decoration: underline;
}

input[type="checkbox"] {
	vertical-align:bottom;
}