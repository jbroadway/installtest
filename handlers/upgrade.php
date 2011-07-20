<?php

$page->layout = 'admin';

if (! User::require_admin ()) {
	header ('Location: /admin');
	exit;
}

if ($this->installed ('installtest', $appconf['Admin']['version']) === true) {
	$page->title = 'Already up-to-date';
	echo '<p><a href="/">Home</a></p>';
	return;
}

$page->title = 'Upgrading app: installtest';

echo '<p>Done.</p>';

$this->mark_installed ('installtest', $appconf['Admin']['version']);

?>