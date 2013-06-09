<?php
$count = 10;
$messages = array('count' => 10);

// Plural
__n('You have %d new message.', 'You have %d new messages.', $count);
__n('You borrado %d message.', 'You borrado %d messages.', $messages['count']);

// Domain Plural
__dn('domain', 'You have %d new message (domain).', 'You have %d new messages (domain).', '10');
__dn('domain', 'You borrado %d message (domain).', 'You borrado %d messages (domain).', $messages['count']);

// Duplicated Message
__('Editing this Page');