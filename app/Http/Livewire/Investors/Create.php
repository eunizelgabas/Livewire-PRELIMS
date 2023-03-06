<?php

namespace App\Http\Livewire\Investors;

use App\Models\Investor;
use Livewire\Component;

class Create extends Component
{
    public $name, $address, $email, $phoneno, $investment, $money;

    public function addInvestor()
    {
        $this->validate([
            'name'          =>['required','string', 'max:255'],
            'address'       =>['required','string', 'max:255'],
            'email'         =>['required','email', 'unique:investors'],
            'phoneno'       =>['required','numeric'],
            'investment'    =>['required','string', 'max:255'],
            'money'    =>['required','string', 'max:255'],
        ]);

        Investor::create([
          'name'        =>$this->name,
          'address'     =>$this->address,
          'email'       =>$this->email,
          'phoneno'     =>$this->phoneno,
          'investment'  =>$this->investment,
          'money'       =>$this->money,
        ]);

        return redirect('/investor')->with('message', 'Added Successfully');
    }

    public function render()
    {
        return view('livewire.investors.create');
    }
}
