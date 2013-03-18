<?php

$page->layout = 'admin';

$this->require_admin ();

$page->title = 'Install Test';

echo '<p>This app simply demos the install and upgrade features of Elefant,
and provides a template for developers to use for their own app install routines.</p>';

?>