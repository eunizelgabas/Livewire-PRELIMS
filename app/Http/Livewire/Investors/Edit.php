<?php

namespace App\Http\Livewire\Investors;

use App\Models\Investor;
use Livewire\Component;

class Edit extends Component
{
    public $investorId, $name, $address, $email, $phoneno, $investment, $money;

    public function mount()
    {
        $this->name = $this->investor->name;
        $this->address = $this->investor->address;
        $this->email = $this->investor->email;
        $this->phoneno = $this->investor->phoneno;
        $this->investment = $this->investor->investment;
        $this->money = $this->investor->money;
    }

    public function getInvestorProperty()
    {
        return Investor::find($this->investorId);
    }

    public function editInvestor()
    {
        $this->validate([
            'name'          =>['required','string', 'max:255'],
            'address'       =>['required','string', 'max:255'],
            'email'         =>['required','email', 'unique:investors,email,'. $this->investor->id],
            'phoneno'       =>['required','numeric'],
            'investment'    =>['required','string', 'max:255'],
            'money'         =>['required', 'string', 'max:255'],
        ]);

        $this->investor->update([
            'name'          =>$this->name,
            'address'       =>$this->address,
            'email'         =>$this->email,
            'phoneno'       =>$this->phoneno,
            'investment'    =>$this->investment,
            'money'         =>$this->money,
        ]);

        return redirect('/investor')->with('message', 'Updated Successfully');
    }

    public function cancel()
    {
        redirect('/investor');
    }
    public function render()
    {
        return view('livewire.investors.edit');
    }
}
