<?php 

$result = "";

echo '<pre>',print_r($_POST,1),'</pre>';

if ($_POST["form"] == 0) {
    $result .= "\n\nИмя ";
    $val = $_POST["name"];
    $result .= "\n" . $val;

    $result .= "\n\nТелефон: ";
    $val = $_POST["phone"];
    $result .= "\n" . $val;

    $result .= "\n\Письмо: ";
    $val = $_POST["text"];
    $result .= "\n" . $val;

    $result .= "\n\E-mail: ";
    $val = $_POST["email"];
    $result .= "\n" . $val;
    mail('baremantar@gmail.com', 'Liberty Обратная форма', $result);
} else {}