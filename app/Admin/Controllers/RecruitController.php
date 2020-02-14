<?php

namespace App\Admin\Controllers;

use App\Models\Recruit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RecruitController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '採用候補者';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Recruit);

        $grid->selection_status('選考状況');
        $grid->recruiting_companies('経由会社');
        $grid->applicant_name('求職者');
        $grid->portfolio_url('portfolio url');
        $grid->occupation('部門');
        $grid->skill('スキル概要');
        $grid->pdf('pdf');

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
        $show = new Show(Recruit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('recruiting_companies', __('Recruiting companies'));
        $show->field('applicant_name', __('Applicant name'));
        $show->field('occupation', __('Occupation'));
        $show->field('portfolio_url', __('Portfolio url'));
        $show->field('interviewer', __('Interviewer'));
        $show->field('impression', __('Impression'));
        $show->field('interview_status', __('Interview status'));
        $show->field('about', __('About'));
        $show->field('interview_date', __('Interview date'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Recruit);

        $form->text('recruiting_companies', __('Recruiting companies'));
        $form->text('applicant_name', __('Applicant name'));
        $form->text('occupation', __('Occupation'));
        $form->text('portfolio_url', __('Portfolio url'));
        $form->text('interviewer', __('Interviewer'));
        $form->text('impression', __('Impression'));
        $form->text('interview_status', __('Interview status'));
        $form->text('about', __('About'));
        $form->text('interview_date', __('Interview date'));

        return $form;
    }
}
