<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SocialRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class SocialCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Social::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/social');
        $this->crud->setEntityNameStrings(__('admin.social'), __('admin.socials'));
    }

    protected function setupListOperation()
    {
        $this->crud->column('url')->type('text')->label(__('admin.url'));
        $this->crud->column('icon')->type('text')->label(__('admin.icon'));
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SocialRequest::class);

        $this->crud->field('url')->type('text')->label(__('admin.url'));
        $this->crud->field('icon')->type('text')->label(__('admin.icon'))->hint(__('admin.icon_hint'))->attributes(['placeholder' => 'icon-facebook'])->default('icon-');

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
