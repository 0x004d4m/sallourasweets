<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CounterRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CounterCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CounterCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Counter::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/counter');
        CRUD::setEntityNameStrings(__('admin.counter'), __('admin.counters'));
    }

    protected function setupListOperation()
    {
        CRUD::column('name')->type('text')->label(__('admin.name'));
        CRUD::column('counter')->type('number')->label(__('admin.counter'));
    }

    protected function setupUpdateOperation()
    {
        CRUD::setValidation(CounterRequest::class);
        CRUD::field('name')->type('text')->label(__('admin.name'));
        CRUD::field('counter')->type('number')->label(__('admin.counter'));
    }
}
