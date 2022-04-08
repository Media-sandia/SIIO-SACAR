<?php

namespace App\Http\Controllers\servicio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClienteGrua;
use App\Models\coments;
use App\Models\Fileables;
use App\Models\Gruas;
use App\Models\seccion1;
use App\Models\seccion2;
use App\Models\seccion3;
use PDF;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function saveSection1(Request $request)
    {
        $section = new seccion1();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();

        $comment = new coments();
        $comment->body = $request->body;
        $comment->save();

        $files = $request->file('files', []);
        for ($i = 0; $i < count($files); $i++) {
            $file = new Fileables();
            $file->Fileable_type = seccion1::class;
            $file->Fileable_id = $section->id;
            $file->id_coment = $comment->id;

            $file->uri = $files[$i]->store('images');
            $file->name = $files[$i]->getClientOriginalName();
            $file->save();
        }
        return response()->json(['url' => 'Reporte/prueba/' . $request->id_equipo . '/' . $request->Folio_service, 'status' => 1]);
    }

    public function saveSection2(Request $request)
    {
        /**$section = new seccion2();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();**/

        /**$comment = new coments();
        $comment->body = $request->body;
        $comment->save();

        $files = $request->file('files', []);
        for ($i = 0; $i < count($files); $i++) {
            $file = new Fileables();
            $file->Fileable_type = seccion2::class;
            $file->Fileable_id = $section->id;
            $file->id_coment = $comment->id;

            $file->uri = $files[$i]->store('images');
            $file->name = $files[$i]->getClientOriginalName();
            $file->save();
        }**/
        return response()->json($request);
    }

    public function saveSection3(Request $request)
    {
        $section = new seccion3();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();

        $comment = new coments();
        $comment->body = $request->body;
        $comment->save();

        $files = $request->file('files', []);
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

    public function pdf_prueba($id_equipo, $Folio)
    {
        $Grua = Gruas::find($id_equipo); //  consulta de informacion del equipo de la grua
        $customer = ClienteGrua::find($Grua->id_cliente); // consulta de informacion del cliente
        $seccion1 = seccion1::where('Folio', $Folio)->get();
        $data = $seccion1[0]->data['id_equipo'];
        $pdf = PDF::loadView('PDF.report', compact('customer', 'Grua', 'seccion1', 'data'));
        return $pdf->stream('Pruebas.pdf');
    }
}
