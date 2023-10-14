<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ItemRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ItemCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel(\App\Models\Item::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/item');
        $this->crud->setEntityNameStrings(__('admin.item'), __('admin.items'));
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn('category_id', [
            'label' => __('admin.category'),
            'type' => "select",
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => "name",
            'model' => 'App\Models\Category'
        ]);
        $this->crud->setColumnDetails('category_id', [
            'label' => __('admin.category'),
            'type' => "select",
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => "name",
            'model' => 'App\Models\Category'
        ]);
        $this->crud->column('name')->type('text')->label(__('admin.name'));
        $this->crud->column('description')->type('text')->label(__('admin.description'));
        $this->crud->column('price')->type('text')->label(__('admin.price'));
        $this->crud->column('image')->type('image')->label(__('admin.image'));
        $this->crud->column('is_featured')->label(__('admin.is_featured'))->type('boolean');
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ItemRequest::class);

        $this->crud->addField([
            'label' => __('admin.category'),
            'type' => "relationship",
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => "name",
            'model' => 'App\Models\Category'
        ]);
        $this->crud->field('name')->type('text')->label(__('admin.name'));
        $this->crud->field('description')->type('text')->label(__('admin.description'));
        $this->crud->field('price')->type('text')->label(__('admin.price'));
        $this->crud->field('image')->type('image')->label(__('admin.image'));
        $this->crud->field('is_featured')->label(__('admin.is_featured'))->type('boolean');
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
