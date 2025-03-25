<?php

print("Hello World!\n");


// Installation steps for PHP 
echo "Steps to Install XAMPP, PHP:\n\n" .

    "1. Install XAMPP:\n" .
    "- Download from https://www.apachefriends.org/download.html.\n" .
    "- Install and start Apache/MySQL via the XAMPP Control Panel.\n" .
    "- Verify by visiting http://localhost.\n\n" .

    "2. Verify PHP (included in XAMPP):\n" .
    "- Create a file `info.php` in `htdocs` with: `<?php phpinfo(); ?>`\n" .
    "- Visit http://localhost/info.php to confirm PHP setup.\n\n" .


    "That's it! XAMPP, PHP are ready.\n\n";

// data types in php:

// int, string, float, boolean, array, null , (object and resource ) >> later 

echo "declaring and printing variables in PHP:\n\n";

$int = 1;
echo $int . " is " . gettype($int);
echo "\n";

$string = "Hello I am a string";
echo $string . " is " . gettype($string);
echo "\n";

$float = 1.1;
echo $float . " is " . gettype($float);
echo "\n";

$bool = true;
echo $bool . " is " . gettype($bool);
echo "\n";

$array = [1, 2, 3, 'a', 'b', 'c'];
print_r($array);
echo "and the type is " . gettype($array);
echo "\n";

$null = null;
echo $null . " is " . gettype($null);
echo "\n";
