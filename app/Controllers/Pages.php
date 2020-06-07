<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        return $this->load('home');
    }

    public function registerFefa()
    {
        $saveSuccess['saveSuccess'] = 'true';
        return true;
    }

    public function processFeedback()
    {
        $this->sendEmailNotification('hello');
        $saveSuccess['saveSuccess'] = 'true';
        return true;
    }

    public function load($pagename)
    {
        return $this->renderView($pagename);
    }

    private function renderView($page = 'home', $page_data = [])
    {

        if ( ! is_file(APPPATH.'/Views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $header_data["current_page"] = $page;

        echo view('templates/header', $header_data);
        echo view($page, $page_data);
        echo view('templates/footer');
        
    }

    private function sendEmailNotification($process = 'feedback', $data = [])
    {
        log_message('debug','Inside sendEmailNotification');
    }

}
