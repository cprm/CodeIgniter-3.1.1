<?php
defined('BASEPATH') or exit('No direct script access allowed');

//namespace t1;

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    use Pug;

    public function index()
    {
        //$this->load->view('welcome_message');
        $test = new Test();
        //print_r($test);
        $test->show();

        $test2 = new \t1\Test2();
        print_r($test2);
        //echo "composer test";
        //
        $this->settings(['cache' => true]);
        $this->view('myview', ['value' => '你好 世界!']);
    }
}
