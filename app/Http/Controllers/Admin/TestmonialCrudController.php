<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestmonialRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class TestmonialCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Testmonial::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/testmonial');
        $this->crud->setEntityNameStrings(__('admin.testmonial'), __('admin.testmonials'));
    }

    protected function setupListOperation()
    {
        $this->crud->column('name')->type('text')->label(__('admin.name'));
        $this->crud->column('description')->type('text')->label(__('admin.description'));
        $this->crud->column('image')->type('image')->label(__('admin.image'));
        $this->crud->column('stars')->type('text')->label(__('admin.stars'));
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TestmonialRequest::class);

        $this->crud->field('name')->type('text')->label(__('admin.name'));
        $this->crud->field('description')->type('text')->label(__('admin.description'));
        $this->crud->field('image')->type('image')->label(__('admin.image'));
        $this->crud->field('stars')->type('text')->label(__('admin.stars'));
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
