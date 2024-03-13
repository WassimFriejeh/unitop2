<?php

namespace App\Livewire;

use App\GeneratedModels\DepartmentsModel;
use App\Models\TeamMembersModel;
use Livewire\Component;

class DepartmentsController extends Component
{
    public $departments;
    public $team_members;
    public $selectedDepartment;

    public function render()
    {
        $query = TeamMembersModel::where('cancelled', 0)->orderBy('orders', 'ASC');
        if ($this->selectedDepartment) {
            $query->whereHas('department', function ($q) {
                $q->where('label', $this->selectedDepartment);
            });
        }
        $this->team_members = $query->get();
        $this->departments = DepartmentsModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();  // Corrected namespace
        // $this->team_members = TeamMembersModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();  // Corrected namespace
        return view('livewire.departments-controller');
    }
}
