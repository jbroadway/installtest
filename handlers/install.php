<?php

$this->require_admin ();

$page->layout = 'admin';

$cur = $this->installed ('installtest', $appconf['Admin']['version']);

if ($cur === true) {
	$page->title = 'Already installed';
	echo '<p><a href="/">Home</a></p>';
	return;
} elseif ($cur !== false) {
	$this->redirect ('/' . $appconf['Admin']['upgrade']);
}

$page->title = 'Installing app: installtest';

// Do your install work here

echo '<p>Done.</p>';

$this->mark_installed ('installtest', $appconf['Admin']['version']);

?>