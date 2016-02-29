<?php

    return function($site, $pages, $page) {
        $form = uniform('contact-form', [
            'required' => [
                'name'  => '',
                '_from' => 'email'
            ],
            'actions' => [
                [
                    '_action' => 'email',
                    'to'      => 'me@example.com',
                    'sender'  => 'hi@flore.nz',
                    'subject' => '[HI&OOC] New message from the contact form'
                ]
            ]
        ]);

        return compact('form');
    };
?>

