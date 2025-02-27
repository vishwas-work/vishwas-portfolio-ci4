<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

use App\Models\Enquiries;

class Home extends Controller
{
    public $enquiryModel;
    public $fromValidaion;



    public function __construct()
    {
        $this->enquiryModel = new Enquiries();
        $this->fromValidaion = \config\Services::validation();
    }

    public function index()
    {
        return view('home');
    }



    public function resumeShow()
    {

        return view('resume');
    }
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        return view('project');
    }
    public function contactform()
    {
        // print_r($this->fromValidaion);


        $this->fromValidaion->setRules([
            'name' => 'required|',
            'email' => 'required|valid_email',
            'message' => 'required',

        ]);

        print_r($this->validate($this->fromValidaion->getRules()));

        if (!$this->validate($this->fromValidaion->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->fromValidaion->getErrors());
        }


        $this->enquiryModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
        ]);


        // // Save data to database
        // $formModel = new FormModel();
        // $formModel->save([
        //     'name'  => $this->request->getPost('name'),
        //     'email' => $this->request->getPost('email'),
        // ]);
        // $session->setFlashdata('success', 'Your enquiry has been submitted successfully.');

        return redirect()->to('/contact')->with('success', 'Your enquiry has been submitted successfully.');
    }
}
