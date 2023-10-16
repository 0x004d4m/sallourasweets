<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class CategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Category::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/category');
        $this->crud->setEntityNameStrings(__('admin.category'), __('admin.categories'));
    }

    protected function setupListOperation()
    {
        $this->crud->column('name')->label(__('admin.name'))->type('text');
        $this->crud->column('description')->label(__('admin.description'))->type('text');
        $this->crud->column('image')->label(__('admin.image'))->type('image');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CategoryRequest::class);

        $this->crud->field('name')->label(__('admin.name'))->type('text');
        $this->crud->field('description')->label(__('admin.description'))->type('text');
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
