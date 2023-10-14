<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Image::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/image');
        $this->crud->setEntityNameStrings(__('admin.image'), __('admin.images'));
    }

    protected function setupListOperation()
    {
        $this->crud->column('name')->type('text')->label(__('admin.name'));
        $this->crud->column('image')->type('image')->label(__('admin.image'));
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(ImageRequest::class);

        $this->crud->field('name')->type('text')->label(__('admin.name'));
        $this->crud->field('image')->type('image')->label(__('admin.image'));
    }
}
