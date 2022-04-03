<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteGrua;
use App\Models\coments;
use App\Models\Fileables;
use App\Models\Gruas;
use App\Models\seccion3;
use PDF;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function saveSection1(Request $request)
    {
        $section = new seccion3();
        $section->data = $request->all();
        $section->save();
        $comment = new coments();
        $comment->body = $request->body;
        $comment->save();
        $files = $request->file('file', []);
        for ($i = 0; $i < count($files); $i++) {
            $file = new Fileables();
            $file->Fileable_type = seccion3::class;
            $file->Fileable_id = $section->id;
            $file->id_coment = $comment->id;

            $file->uri = $files[$i]->store('images');
            $file->name = $files[$i]->getClientOriginalName();
            $file->save();
        }
    }

    public function home()
    {
        return view('Layaut.layaut');
    } //Clientes

    public function teams()
    {
        return view('sigs.table-teams');
    }

    public function customers()
    {
        return view('sigs.table-clientesP');
    }

    public function process_cliente(Request $request)
    {
        ClienteGrua::create(request()->all());
        return response()->json(['status' => 1]);
    }

    public function dataClientes()
    {
        $clientes = ClienteGrua::all();
        return response()->json($clientes);
    }

    public function process_teams(Request $request)
    {
        Gruas::create(request()->all());
        return response()->json(['status' => 1]);
    }

    public function load_empresas($val)
    {
        $empresas = ClienteGrua::where('Sucursal', $val)->get();
        return response()->json($empresas);
    }

    public function load_business($val)
    {
        $business = ClienteGrua::find($val)->Grua;
        return response()->json($business);
    }

    public function NewReport()
    {
        return view('sigs.nuevo-registro');
    }

    public function pruebas(Request $request)
    {
        $seccion = new seccion3();
        $seccion->data = $request->all();
        $seccion->save();
        $data = $seccion->find(1)->data;
        return response()->json($request);
        //$array = array();
        //$dataT = array($request->name[0]=>[filled($request->data->OK)]);
        /**for($i= 0;$i>=15;$i++){
            //array_unshift($newarray,$request->campos[$i]); 
            $newarray[] = $request->campos[$i];
        };**/
        //$valor = (string)$res[0];
        //$data = array($request->name[0]=>[filled($request->data->$request->campos[0]),filled($request->data->$request->campos[1]),filled($request->data->$request->campos[2])]);
        /**for($i=0; $i >=count($request->name);$i++){
            $new = array($request->name[$i]=>[filled($request->campos[$a]),
                                             filled($request->campos[$b]),
                                             filled($request->campos[$c])]); 
            $a = $a+3;
            $b = $b+3;
            $c = $c+3;
        }**/
        //$var = filled($request->all()); 
        //$array = array([$request->response[0]=>filled($request->data[0]),
        //$request->response[1]=>filled($request->data[1]),
        //$request->response[2]=>filled($request->data[2])]); 

        //return response()->json(count($newarray));
    }

    public function validator_folio()
    {
    }

    public function pdf_prueba()
    {
        $vista = view('PDF.master');
        $pdf = PDF::loadHTML($vista);
        return $pdf->stream('Pruebas.pdf');
    }
}
