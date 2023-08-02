<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\Terminal;

class Tickets extends Component
{


    public $results;
    public $terminals;

    public function mount($results, $terminals)
    {
        $this->results = $results;
        $this->terminals = $terminals;
    }

    // public function mount($terminals)
    // {
    //     $this->terminals = $terminals;
    // }

    public $searchTerm = '';

    public $searchKeberangkatan = '';
    public $tickets;

    public function render()
    {
        $this->tickets = Ticket::where('terminal_tujuan', 'like', '%'.$this->searchTerm.'%')->get();
        $this->terminals = Terminal::where('terminal_keberangkatan', 'like', '%'.$this->searchKeberangkatan.'%')->get();
        // $this->tickets = Ticket::join('terminal', 'tickets.terminal_id', '=', 'terminals.id')
        // ->where('terminals.terminal_keberangkatan', 'like', '%'.$this->searchKeberangkatan.'%')
        // ->where('terminals.terminal_tujuan', 'like', '%'.$this->searchTerm.'%')
        // ->get();
        return view('livewire.tickets');

        // return view('livewire.tickets');
    }
}
