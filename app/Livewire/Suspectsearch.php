<?php

namespace App\Livewire;

use App\Models\suspectmodel;
use Livewire\Component;
use Livewire\WithPagination;

class Suspectsearch extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name;
    public $deleteId;
    public function search()
    {
        // No need to do anything here, as Livewire will automatically re-render the component when properties change
    }
    public function render()
    {
        $query = suspectmodel::query();

        if ($this->name) {
            $query->where('name', 'like', '%' . $this->name . '%')
                ->orWhere('last_name', 'like', '%' . $this->name . '%')
                ->orWhere('father_name', 'like', '%' . $this->name . '%')
                ->orWhere('phone', 'like', '%' . $this->name . '%')
                ->orWhere('tazcira_number', 'like', '%' . $this->name . '%')
                ->orWhere('actual_address', 'like', '%' . $this->name . '%')
                ->orWhere('current_address', 'like', '%' . $this->name . '%');
        }
        $suspects = $query->orderby('id', 'desc')->paginate(10);

        return view('livewire.suspectsearch', compact('suspects'));
    }
    public function setDeleteId($id)
    {
        $this->deleteId = $id;
    }

    public function deleteSuspect()
    {
        suspectmodel::find($this->deleteId)->delete();
        session()->flash('success', 'Suspect deleted successfully.');
        $this->reset('deleteId');
    }
}
