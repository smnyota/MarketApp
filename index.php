<?php
include('include/init.php');
//Future Front Page of Website:

//seems like php does not echo booleans only strings unless ofc if you cast the bool to an int
echo '1';
var_dump(getUser('shadlkas', '33'));
echo '2';

debugOutput(getUser('ds','3'));

echo (int)false;