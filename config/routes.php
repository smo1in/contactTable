<?php
return [
        'contact/addContact' => 'contact/addContact',
        'contact/updateContact/([0-9]+)' => 'contact/updateContact/$1',
        'contact/deleteContact/([0-9]+)' => 'contact/deleteContact/$1',
        '' => 'contact/index'
];
        