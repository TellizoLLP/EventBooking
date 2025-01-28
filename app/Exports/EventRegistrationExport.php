<?php

namespace App\Exports;

use App\Models\EventRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Contracts\View\View;

class EventRegistrationExport implements FromView,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Customer::all();
    // }


    private $rooms; 



    private $Mainrooms; 


    private $Additionalrooms;
    

     // Constructor to accept data
     public function __construct($rooms, $Mainrooms, $Additionalrooms)
     {
         $this->rooms = $rooms;
         $this->Mainrooms = $Mainrooms;
         $this->Additionalrooms = $Additionalrooms;
     }

    
    public function view(): View
    {
        $participants = EventRegistration::latest()->get();
        return view('livewire.admin.registrations.registration-export', [
            'participants' => $participants,
            'rooms' => $this->rooms,
            'Mainrooms' => $this->Mainrooms,
            'Additionalrooms' => $this->Additionalrooms,
        ]);
    }

    public function registerEvents(): array

    {

        return [

            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getRowDimension('1')->setRowHeight(20);
                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(10);
                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(50);
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(30);
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(30);
            },

        ];

    }
}
