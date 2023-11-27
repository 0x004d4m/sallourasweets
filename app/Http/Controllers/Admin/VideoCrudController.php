<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VideoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class VideoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Video::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/video');
        $this->crud->setEntityNameStrings(__('admin.video'), __('admin.videos'));
    }

    protected function setupListOperation()
    {
        $this->crud->setFromDb();

        $this->crud->column('name')->type('text')->label(__('admin.name'));
        $this->crud->column('url')->type('text')->label(__('admin.url'));
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(VideoRequest::class);
        $this->crud->setFromDb();


        $this->crud->field('name')->type('text')->label(__('admin.name'));
        $this->crud->field('url')->type('text')->label(__('admin.url'));
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
