<?php

function change_permissions($file_name)
{
    if (file_exists($file_name)) {

        if (is_file($file_name)) {
            if (pathinfo($file_name)['extension'] == 'txt') {
                chmod($file_name, 0700);
                echo "Premission Changed" . '<br>';
            } else {
                echo "File Extension Is Not txt" . '<br>';
            }
        } else {
            echo "This Is Directort And Only Files Allowed" . '<br>';
        }
    }else{
        echo "No Such Files Or Directories" . '<br>';
    }
}

// Test Cases

echo change_permissions("Elzero.txt"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed