<?php
/**
 * Admin controller
 *
 */

namespace sso\core\common;

use sso\core\common as cm;
use sso\core\model as md;


class Admin extends cm\Controller
{
    public $suser = NULL;
    public $app  = NULL;

    public function __construct()
    {
        parent::__construct();
    }
    
    //default page
    public function index()
    {
        die ('died page');
        //return $this->login()->addapp();
    }

    public function login()
    {
        $this->out("Please login firstlly.");    
        $this->fetch_flush('authentication/login');
        //return $this->flush();
    }

    public function addapp()
    {
        $app = new md\App;


        $this->set('uname', 'rereadyou');
        //return $this->flush(); 
    }

}
//end of Controller Admin class declaration
?>
