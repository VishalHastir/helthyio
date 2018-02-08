<?php

namespace Encore\Admin\Controllers;

use Encore\Admin\Auth\Database\Products;
use Encore\Admin\Auth\Database\Season;
use Encore\Admin\Auth\Database\DietCategory;
use Encore\Admin\Auth\Database\Permission;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {

        return Admin::content(function (Content $content) {
            $content->header(trans('Products'));
            $content->description(trans('List'));
            $content->body($this->grid()->render());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     *
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header(trans('Products'));
            $content->description(trans('Edit'));
            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('Products'));
            $content->description(trans('Add'));
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Products::grid(function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->name(trans('Name'));

            $grid->actions(function (Grid\Displayers\Actions $actions) {
                if ($actions->getKey() == 1) {
                    $actions->disableDelete();
                }
            });

            $grid->tools(function (Grid\Tools $tools) {
                $tools->batch(function (Grid\Tools\BatchActions $actions) {
                    $actions->disableDelete();
                });
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        return Products::form(function (Form $form) {
            $form->display('id', 'ID');

            $form->text('name', trans('Name'))->rules('required');
            $form->text('indian_name', trans('Indian Name'))->rules('required');
            $form->select('season_id', trans('Season'))->rules('required')->options(Season::all()->pluck('name', 'id'));
            $form->select('diet_category_id', trans('Diet Category'))->rules('required')->options(DietCategory::all()->pluck('name', 'id'));
            $form->text('description', trans('Description'))->rules('required');
            $form->text('details', trans('Details'))->rules('required');
            $form->text('measurement_type', trans('Measurement Type'))->rules('required');
            $form->text('protein', trans('Protein'))->rules('required');
            $form->text('carbs', trans('Carbohydraytes'))->rules('required');
            $form->text('fat', trans('Fats'))->rules('required');
            $form->text('fibre', trans('Fibre'))->rules('required');
            $form->image('image_name', trans('Image'));
            

            //$form->multipleSelect('roles', trans('admin.roles'))->options(Role::all()->pluck('name', 'id'));
            //$form->multipleSelect('permissions', trans('admin.permissions'))->options(Permission::all()->pluck('name', 'id'));

            //$form->display('created_at', trans('admin.created_at'));
            //$form->display('updated_at', trans('admin.updated_at'));

            $form->saving(function (Form $form) {
                if ($form->password && $form->model()->password != $form->password) {
                    $form->password = bcrypt($form->password);
                }
            });
        });
    }
}
