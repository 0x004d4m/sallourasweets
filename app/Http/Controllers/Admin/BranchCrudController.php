<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BranchRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class BranchCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Branch::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/branch');
        $this->crud->setEntityNameStrings(__('admin.branch'), __('admin.branches'));
    }

    protected function setupListOperation()
    {
        $this->crud->column('address')->label(__('admin.address'))->type('text');
        $this->crud->column('phone')->label(__('admin.phone'))->type('text');
        $this->crud->column('location')->label(__('admin.location'))->type('text');
        $this->crud->column('image')->label(__('admin.image'))->type('image');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(BranchRequest::class);

        $this->crud->field('address')->label(__('admin.address'))->type('text');
        $this->crud->field('phone')->label(__('admin.phone'))->type('text');
        $this->crud->field('location')->label(__('admin.location'))->type('text');
        $this->crud->field('image')->label(__('admin.image'))->type('image');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }
}
