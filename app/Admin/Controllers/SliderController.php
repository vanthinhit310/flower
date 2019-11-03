<?php

namespace App\Admin\Controllers;

use App\Model\Slider;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SliderController extends AdminController
{
  /**
   * Title for current resource.
   *
   * @var string
   */
  protected $title = 'Slider';

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid()
  {
    $grid = new Grid(new Slider);
    $grid->image('Image');
    $grid->title('Title');
    $grid->description('Description');
    $grid->status('Status');
    return $grid;
  }

  /**
   * Make a show builder.
   *
   * @param mixed $id
   * @return Show
   */
  protected function detail($id)
  {
    $show = new Show(Slider::findOrFail($id));
    $show->id('ID');
    $show->image()->image();
    $show->title('Title');
    $show->description('Description');
    $show->status('Status');
    $show->created_at('Created At');
    $show->updated_at('Updated At');

    return $show;
  }

  /**
   * Make a form builder.
   *
   * @return Form
   */
  protected function form()
  {
    $form = new Form(new Slider);
    $form->image('image', 'Image')->uniqueName();
    $form->text('title');
    $form->text('description');
    $form->select('status')->options(['Published' => 'Published', 'Hidden' => 'Hidden']);
    return $form;
  }
}
