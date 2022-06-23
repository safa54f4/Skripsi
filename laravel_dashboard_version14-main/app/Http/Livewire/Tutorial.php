<?php

namespace App\Http\Livewire;

use App\Models\Tdata;
use Livewire\Component;

class Tutorial extends Component
{
    public $tdata;
    protected $listeners = ['ubahData' => 'changeData'];
    public function mount()
    {
        $tdata = Tdata::latest('id')->limit(30)->get();
        foreach($tdata as $item){
            $data['label'][] = $item->date;
            $data['data'][] = $item->rssi;
            $data['data2'][] = $item->snr;
        }
        $this->tdata = json_encode($data);
        // dd($this->tdata);

    }
    public function render()
    {
        return view('livewire.tutorial')->extends('layouts.master')->section('content');
    }

public function changeData()
{
    $tdata = Tdata::first()->limit(50)->get();
        foreach($tdata as $item){
            $data['label'][] = $item->date;
            $data['data'][] = $item->rssi;
            $data['data2'][] = $item->snr;
        }
        $this->tdata = json_encode($data);
        $this->tdata = json_encode($data);
        $this->emit('berhasilUpdate',['data' => $this->tdata]);

    }

}