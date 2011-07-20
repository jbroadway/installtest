<?php

$page->layout = 'admin';

if (! User::require_admin ()) {
	header ('Location: /admin');
	exit;
}

$cur = $this->installed ('installtest', $appconf['Admin']['version']);

if ($cur === true) {
	$page->title = 'Already installed';
	echo '<p><a href="/">Home</a></p>';
	return;
} elseif ($cur !== false) {
	header ('Location: /' . $appconf['Admin']['upgrade']);
	exit;
}

$page->title = 'Installing app: installtest';

echo '<p>Done.</p>';

$this->mark_installed ('installtest', $appconf['Admin']['version']);

?>