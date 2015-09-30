<?php

function handleUpload($file) {

    if($file['error'])
    {
        return 'Ooops!  Your upload triggered the following error:  '.$file['error'];

    }

    $ok = move_uploaded_file(
        $file['tmp_name'], 
        'uploads/'.$file['name']
    );

        return "ok!" ;
}

echo handleUpload($_FILES['photo']);
