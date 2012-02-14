<?php

$this->require_admin ();

$page->layout = 'admin';

if ($this->installed ('installtest', $appconf['Admin']['version']) === true) {
	$page->title = 'Already up-to-date';
	echo '<p><a href="/">Home</a></p>';
	return;
}

$page->title = 'Upgrading app: installtest';

// Do your upgrade work here

echo '<p>Done.</p>';

$this->mark_installed ('installtest', $appconf['Admin']['version']);

?>