<?php

namespace App\Http\Livewire;

use App\Models\Commune;
use App\Models\Daira;
use App\Models\Wilaya;
use Livewire\Component;

class WilayaDiaraCommuneComponent extends Component
{

    public $WilayaID;
    public $DiaraID;
    public $daiars = [], $communes = [];

    public function updatedWilayaID()
    {
        $this->daiars = [];
        $this->communes = [];
        $this->daiars = Daira::Where('wilaya_id', $this->WilayaID)->get();
    }

    public function updatedDiaraID()
    {
        $this->communes = [];
        $this->communes = Commune::Where('daira_id', $this->DiaraID)->get();
    }

    public function render()
    {

        $wilayas = Wilaya::all();

        return view('livewire.wilaya-diara-commune-component', ['wilayas' => $wilayas]);
    }
}
