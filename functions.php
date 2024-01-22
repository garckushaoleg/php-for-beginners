<?php

function switchStyleForUrl($url) {
	echo $_SERVER['REQUEST_URI'] === $url ? 'bg-gray-900 text-white' : '';
}