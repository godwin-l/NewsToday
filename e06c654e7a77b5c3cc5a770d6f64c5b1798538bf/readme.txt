Archive contains:
e06c654e7a77b5c3cc5a770d6f64c5b1798538bf - Plugin directory
 - magenet.php - Plugin file
 - index.php   - Directory index file
 - readme.txt  - Instructions file (this file)

Install instructions
1. Unpack archive

2. Copy into site root directory (Example: /home/user/site.com/e06c654e7a77b5c3cc5a770d6f64c5b1798538bf)

3. Change plugin directory mod to 777 (Example: chmod 0777 e06c654e7a77b5c3cc5a770d6f64c5b1798538bf)

4. Copy below code and past to top of php-file
<?php
define('_MN_USER', 'e06c654e7a77b5c3cc5a770d6f64c5b1798538bf');
require_once($_SERVER['DOCUMENT_ROOT'] . '/' . _MN_USER . '/' . 'magenet.php');
$magenet = new Magenet();
?>

5. Copy below code and past to needed part of php-file
<?php
echo $magenet->getLinks($n);
?>

6. $n - number links to show (Example:

echo $magenet->getLinks(1); // one after menu

echo $magenet->getLinks(2); // two after content

echo $magenet->getLinks(); // all other to footer

Warning: last call of functions without parametrs

)