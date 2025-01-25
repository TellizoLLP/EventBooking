<?php

namespace App\Livewire\Home;

use App\Mail\RegistrationCreated;
use App\Models\EventRegistration;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePage extends Component
{
    public $current_status = 1,$first_name,$last_name,$email,$phone,$school_name,$school_grade,$referral_method,$page = 1;
    #[Layout('components.layouts.home-layout')]
    public function render()
    {
        return view('livewire.home.home-page');
    }

    public function pageOneSave(){
        // $this->validate([
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email',
        //     'phone' => 'required|string',
        //     'current_status' => 'required',
        //     'school_name' => 'required_if:current_status,1',
        //     'school_grade' =>'required_if:current_status,1',
        //     'referral_method' => 'required_if:current_status,1',
        // ]);


        $this->page = 2;
    }

    public function pageTwoSave(){
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'current_status' => 'required',
            'school_name' => 'required_if:current_status,1',
            'school_grade' =>'required_if:current_status,1',
            'referral_method' => 'required_if:current_status,1',
        ]);


        $this->page = 3;
    }

    public function save(){
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'current_status' => 'required',
            'school_name' => 'required_if:current_status,1',
            'school_grade' =>'required_if:current_status,1',
            'referral_method' => 'required_if:current_status,1',
        ]);

       
        $eventRegistration = new EventRegistration();
        $eventRegistration->first_name = $this->first_name;
        $eventRegistration->last_name = $this->last_name;
        $eventRegistration->email = $this->email;
        $eventRegistration->phone = $this->phone;
        $eventRegistration->current_status = $this->current_status;
        $eventRegistration->school_name = $this->school_name;
        $eventRegistration->school_grade = $this->school_grade;
        $eventRegistration->referral_method = $this->referral_method;
        $eventRegistration->save();
        $this->reset();
        try{
            Mail::to($eventRegistration->email)->send(new RegistrationCreated($eventRegistration));
        }
        catch(\Exception $e){
            dd($e);
        }   
        return redirect()->route('page-1',['id' => $eventRegistration->id]);
    }
}
