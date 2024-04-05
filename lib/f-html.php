<?php

function start_html ($title = 'Title')
{
    return '
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>'.$title.'</title>
            <link href="css/global.css" rel="stylesheet" type="text/css"/>
        </head>
        <body>
        </body>
    </html>';
}