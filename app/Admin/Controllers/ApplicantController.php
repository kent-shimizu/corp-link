<?php

namespace App\Admin\Controllers;

use App\Models\Applicant;
use App\Repositories\Backend\Admin\ApplicantContract;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ApplicantController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '新規紹介';

    /**
     * @var ApplicantContract
     */
    private $applicant;

    /**
     * ApplicantController constructor.
     * @param ApplicantContract $applicant
     */
    public function __construct(ApplicantContract $applicant)
    {
        $this->applicant = $applicant;
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Applicant);

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
        $show = new Show(Applicant::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('applicant_name', __('Applicant name'));
        $show->field('portfolio_url', __('Portfolio url'));
        $show->field('occupation', __('Occupation'));
        $show->field('skill', __('Skill'));
        $show->field('pdf', __('portforil'));

//        $table->string('applicant_name');
//        $table->string('recruiting_companies');
//        $table->string('portfolio_url')->nullable();
//        $table->integer('occupation');
//        $table->string('skill');
//        $table->string('pdf')->nullable();
//        $table->integer('selection_status');
//        $table->string('interviewer');
//        $table->string('impression')->nullable();
//        $table->dateTime('interview_date')->nullable();

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Applicant);

        $form->text('recruiting_companies', '紹介経由');
        $form->text('applicant_name', '志望者')->rules('required');
        $form->url('portfolio_url', 'portfolio url');
        $form->radio('occupation', '部門')->options([
            'アプリ', 'インフラ','サーバーサイド' , 'ディレクター', 'デバッグ', 'フロントエンド'
        ]);
        $form->textarea('skill', 'スキル')->rules('required');
        $form->text('pdf', 'pdf url');
//        $form->image('pdf', 'pdf url');

        return $form;
    }

    public function getRecruits(){
        dd('de');
//        $grid = new Grid($this->applicant->getRecruit());
//        $grid->selection_status('選考状況');
//        $grid->recruiting_companies('経由会社');
//        $grid->applicant_name('求職者');
//        $grid->portfolio_url('portfolio url');
//        $grid->occupation('部門');
//        $grid->skill('スキル概要');
//        $grid->pdf('pdf');
//        return $grid;
    }










}
