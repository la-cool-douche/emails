<?php

$body = file_get_contents('templates/vœux/2023/email.html');

define('confDOMAIN_NAME', 'lacooldouche.com');



# send with /send.php?debug=0
$DEBUG = (bool)$_GET['debug'] ?? true;
send(
    'communication.cooldouche@gmail.com',
    '✨ Meilleurs vœux 2023 de la part de la Cool Douche',
    $body,
    $DEBUG
);

function send(string $to, string $subject, string $html, bool $debug = true): void
{
    echo "
    <p>SENDING EMAIL TO $to</p>
    <p>WITH SUBJECT $subject</p>
    <p>----</p>
    $html
    ";

    if (!$debug) {
        mail($to, $subject, $html);
    }
    echo '<p>---- SENT ! ----</p>';
}
