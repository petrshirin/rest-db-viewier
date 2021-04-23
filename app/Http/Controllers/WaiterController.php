<?php


namespace App\Http\Controllers;


use App\Forms\Forms\WaiterForm;
use App\Models\Waiter;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    protected $model = Waiter::class;
    protected $modelForm = WaiterForm::class;

    public function save(Request $request, $objId = NULL)
    {
        if ($objId) {
            $tables = $request->request->get('tables');
            $this->model::where('id', $objId)->first()->tables()->attach($tables);
        }
        else {
            $tables = $request->request->get('tables');
            $data = $request->validate($this->form->getValidateRules());
            $obj = $this->model::create($data);
            $obj->tables()->attach($tables);
        }
        return redirect($this->class->getModelName());
    }

}
