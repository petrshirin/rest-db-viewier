<?php

namespace App\Http\Controllers;

use App\Forms\Forms\PositionForm;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    protected $model = NULL;
    protected $template = 'baseListView';
    protected $templateForm = 'baseFormView';
    protected $modelForm = NULL;
    protected $class;
    protected $form;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->class = new $this->model();
        $this->form = new $this->modelForm();
    }

    public function get(){
        $objects  = $this->model::all();

        return view($this->template, array(
            "objects" => $objects,
            "modelClass" => $this->class,
            "modelName" => $this->class->getModelName()
        ));
    }

    public function getForm(Request $request, $objId=NULL) {
        if ($objId) {
            $obj = $this->model::where('id', $objId)->first();
            $form = new $this->modelForm($obj);
        }
        else {
            $obj = new $this->model();
            $form = $this->form;
        }
        return view($this->templateForm, array(
            'obj' => $obj,
            "modelClass" => $this->class,
            "modelName" => $this->class->getModelName(),
            "modelForm" => $form
        ));

    }

    public function save(Request $request, $objId=NULL) {
        $data = $request->validate($this->form->getValidateRules());
        if ($objId) {
            $this->model::where('id', $objId)->first()->update($data);

        }
        else {
            $this->model::create($data);
        }

        return redirect($this->class->getModelName());
    }

    public function delete(Request $request, $objId=NULL)
    {
        if ($objId) {
            $this->model::where('id', $objId)->delete();
        }
        return redirect($this->class->getModelName());
    }
}
