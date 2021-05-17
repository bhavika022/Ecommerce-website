<<<<<<< HEAD
<?php
class Tools extends CI_Controller {
        /*public function message($to = 'World')
        {
                echo "Hello {$to}!".PHP_EOL;
        }*/

        function __construct() {
                parent::__construct();
                $this->load->helper('url');
                $this->load->helper('file');
                $this->load->helper('download');
                $this->load->library('zip');
        }
        
        function database_backup(){
                $this->load->dbutil();
                $db_format=array('format'=>'zip','filename'=>'shopping_cart_backup.sql');
                $backup=& $this->dbutil->backup($db_format);
                $dbname='backup-on-'.date('Y-m-d').'.zip';
                $save='assets/db_backup/'.$dbname;
                write_file($save,$backup);
                force_download($dbname,$backup);
        }
        
}


=======
<?php
class Tools extends CI_Controller {
        /*public function message($to = 'World')
        {
                echo "Hello {$to}!".PHP_EOL;
        }*/

        function __construct() {
                parent::__construct();
                $this->load->helper('url');
                $this->load->helper('file');
                $this->load->helper('download');
                $this->load->library('zip');
        }
        
        function database_backup(){
                $this->load->dbutil();
                $db_format=array('format'=>'zip','filename'=>'shopping_cart_backup.sql');
                $backup=& $this->dbutil->backup($db_format);
                $dbname='backup-on-'.date('Y-m-d').'.zip';
                $save='assets/db_backup/'.$dbname;
                write_file($save,$backup);
                force_download($dbname,$backup);
        }
        
}


>>>>>>> 9b143030d65696b74eefb80f657033869c2ff5ff
