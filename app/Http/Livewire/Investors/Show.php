<?php

namespace App\Http\Livewire\Investors;

use App\Models\Investor;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{

   public $investment = 'all', $money = 'all', $search;
   use WithPagination;

   protected $paginationTheme = 'bootstrap';
    public function loadInvestors()
    {
        $query = Investor::orderBy('name')->search($this->search);

        if($this->investment != 'all'){
            $query->where('investment', $this->investment);
        }

        if($this->money != "all"){
            $query->where('money', $this->money);
        }

        $investors = $query->paginate(6);
        return compact('investors');
    }

    public $investor_delete_id;
    public function deleteConfirmation($id)
    {
        // $investor = Investor::where('id', $id)->first();

        $this->investor_delete_id = $id;
    }

    public function deleteInvestorData(){
        $investor = Investor::where('id', $this->investor_delete_id)->first();
        $investor->delete();

        return redirect('/investor')->with('message', 'Deleted Successfully');

        $this->investor_delete_id = '';
    }

    public function render()
    {
        return view('livewire.investors.show', $this->loadInvestors());
    }
}
