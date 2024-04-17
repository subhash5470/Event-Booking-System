<?php
// include("setting.php");

function validateCredentials($username, $password) {
    
    
    if (($username === 'nithin@gmail.com' && $password === 'subhash') || ($username === 'sriram@gmail.com' && $password === 'sriram') || ($username === 'subhashbuddha5470@gmail.com' && $password === 'helloworld') || ($username==='test@gmail.com' && $password==='abc@123')){
        return true;
    }
    else {
        return false;
    }
}
?>
<?php

use PHPUnit\Framework\TestCase;

require_once 'index.php';

class onlinetest extends TestCase {
    public function testValidCredentials() {
        $username = 'nithin@gmail.com';
        $password = 'nithin';

        $result = validateCredentials($username, $password);

        $this->assertTrue($result);
    }
    public function testValidCredentials1() {
        $username = 'sriram@gmail.com';
        $password = 'sriram';

        $result = validateCredentials($username, $password);

        $this->assertTrue($result);
    }
    public function testValidCredentials2() {
        $username = 'subhashbuddha5470@gmail.com';
        $password = 'helloworld';

        $result = validateCredentials($username, $password);

        $this->assertTrue($result);
    }
}