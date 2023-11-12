<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PolicyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class PolicyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Policy::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/policy');
        $this->crud->setEntityNameStrings(__('admin.policy'), __('admin.policies'));
    }

    protected function setupListOperation()
    {
        $this->crud->column('name')->type('text')->label(__('admin.name'));
        $this->crud->column('text')->type('text')->label(__('admin.text'));
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(PolicyRequest::class);

        $this->crud->field('text')->type('CKEditor')->label(__('admin.text'));
    }
}
