<?php

namespace App\Exports\Specilaity;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Contracts\View\View;

class Room4Report implements FromView,WithEvents
{
  
    private $users; 
   // Constructor to accept data
     public function __construct($users)
     {
         $this->users = $users;
     }

    
    public function view(): View
    {
        return view('livewire.admin.reports.rooms.specilaity.room4-report', [
            'users' => $this->users,
        ]);
    }

    public function registerEvents(): array

    {

        return [

            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(10);
                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(20);
                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(20);
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(20);
                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(10);
                $event->sheet->getDelegate()->getColumnDimension('F')->setWidth(80);
            },

        ];

    }
}