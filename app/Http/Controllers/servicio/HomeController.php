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
use App\Models\seccion4;
use App\Models\seccion5;
use App\Models\seccion6;
use App\Models\seccion7;
use App\Models\seccion8;
use App\Models\seccion9;
use App\Models\seccion10;
use App\Models\seccion11;
use PDF;
use App\Models\section;
use App\Models\subsection;
use App\Models\items;
use Illuminate\Support\Facades\Storage;
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
        $section->Folio = $request->Folio_service15;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection2(Request $request)
    {
        $section = new seccion2();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection3(Request $request)
    {
        $section = new seccion3();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection4(Request $request)
    {
        $section = new seccion4();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection5(Request $request)
    {
        $section = new seccion5();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection6(Request $request)
    {
        $section = new seccion6();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection7(Request $request)
    {
        $section = new seccion7();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection8(Request $request)
    {
        $section = new seccion8();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection9(Request $request)
    {
        $section = new seccion9();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection10(Request $request)
    {
        $section = new seccion10();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1]);
    }

    public function saveSection11(Request $request)
    {
        $section = new seccion11();
        $section->id_equipo = $request->id_equipo;
        $section->Folio = $request->Folio_service;
        $section->Fecha = $request->date_service;
        $section->data = $request->all();
        $section->save();
        return response()->json(['status' => 1, 'url' => 'Reporte/prueba/' . $request->id_equipo . '/' . $request->Folio_service,]);
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
        // $array = array();
        // $dataT = array($request->name[0]=>[filled($request->data->OK)]);
        // /**for($i= 0;$i>=15;$i++){
        //     array_unshift($newarray,$request->campos[$i]);
        //     $newarray[] = $request->campos[$i];
        // };**/
        // $valor = (string)$res[0];
        // $data = array($request->name[0]=>[filled($request->data->$request->campos[0]),filled($request->data->$request->campos[1]),filled($request->data->$request->campos[2])]);
        // /**for($i=0; $i >=count($request->name);$i++){
        //     $new = array($request->name[$i]=>[filled($request->campos[$a]),
        //                                      filled($request->campos[$b]),
        //                                      filled($request->campos[$c])]);
        //     $a = $a+3;
        //     $b = $b+3;
        //     $c = $c+3;
        // }**/
        // $var = filled($request->all());
        // $array = array([$request->response[0]=>filled($request->data[0]),
        // $request->response[1]=>filled($request->data[1]),
        // $request->response[2]=>filled($request->data[2])]);

        //return response()->json(count($newarray));
    }

    public function Evidence(Request $request){
        // dd( $request->items);
        $files = $request->file('files', []);
           if(count($files)<=5){
                for ($i = 0; $i < count($files); $i++) {
                    $file = new Fileables();
                    $file->id_item = $request->items;
                    $file->Folio = $request->evidense_service;
                    $file->uri = $files[$i]->store('images');
                    $file->name = $files[$i]->getClientOriginalName();
                    $file->save();
                }
                $comment = new coments();
                $comment->id_item = $request->items;
                $comment->Folio = $request->evidense_service;
                $comment->body = $request->body;
                $comment->save();
                return response()->json(['status'=>1]);
            }
            else{
                return response()->json(['status'=>0]);
            }

        }

    public function sections($id){
        $section = section::where('id',$id)->get();
        return response()->json($section);
    }

    public function subsection($id){
        $subsection = section::find($id)->subsection;
        return response()->json($subsection);
    }

    public function items($id){
        $items = subsection::find($id)->items;
        return response()->json($items);
    }

    private function reset_array($array){
        $var = count($array);
        if($var != 0){
            for($i=0; $i<$var; $i++){
                unset($array[$i]);
            }
                return $array;
        }
        else{
            return $array;
        }
    }

    private function Files($Folio){
        $items = items::all('id');
        $count = count($items);
        $FilesArray = array();
        for ($i=0; $i <$count ; $i++) {
            $file = Fileables::where('id_item',$items[$i]->id)->where('Folio',$Folio)->get();
            if (count($file)>=5) {
                echo 'Error en la integridad de datos';
                return false;
                break;
            }
            else{
                if(count($file) !=0){
                    array_push($FilesArray,$file);
                }
                else{
                    continue;
                }
            }
        }// fin del ciclo for
        return $FilesArray;
    }

    private function Coments($Folio){
        $items = items::all('id');
        $count = count($items);
        $ComentArray = array();
        for ($i=0; $i < $count ; $i++) {
            $comment = coments::where('id_item',$items[$i]->id)->where('Folio',$Folio)->get();
            if(count($comment)>=2){
                return false;
                break;
            }
            else{
                if(count($comment) != 0){
                    array_push($ComentArray,$comment);
                }
                else{
                    continue;
                }
            }
        }
        return $ComentArray;
    }

    public function load_equipos($id){
        $equipos = Gruas::where('id_cliente',$id)->get();
        return response()->json($equipos);
    }

    // public function array(){
    //     $files = array();
    //     $new = array();// array para el reseteo y dar tipo de variable a array
    //     $section = section::all();
    //     $var = section::all();
    //     $let = section::all();
    //     $num = count($section);



    //     for($i=0; $i<=$num;$i++){
    //         if($i===0){
    //             $newarray = $this->reset_array($new);
    //             //array_push($newarray,$section[$i]);
    //         }
    //         if($i!=$num){
    //             //array_push($files,$newarray);
    //             array_push($newarray,$section[$i]);
    //         }
    //         else{
    //             //array_push($newarray,$section[$i]);
    //             array_push($files,$newarray);
    //         }
    //     }


    //     for($i=0; $i<=$num;$i++){
    //         if($i==0){
    //             $newarray = $this->reset_array($new);
    //             //array_push($newarray,$var[$i]);
    //             echo $i."<br>";
    //         }
    //         if($i!=$num){
    //             array_push($files,$newarray);

    //         }
    //         else{
    //             echo $i;
    //             array_push($newarray,$var[$i]);
    //         }
    //     }
    //     //echo json_encode($files);

    //     // for($i=0; $i<=$num;$i++){
    //     //     if($i==0){
    //     //         $newarray = $this->reset_array($new);
    //     //         array_push($newarray,$var[$i]);
    //     //     }
    //     //     if($i==$num){
    //     //         array_push($files,$newarray);
    //     //     }
    //     //     else{
    //     //         array_push($newarray,$let[$i]);
    //     //     }
    //     // }

    //     //echo json_encode($files);
    // }

    public function service_report($id_equipo, $Folio){
        $j=0;
        $i=0;
        $Gruas = Gruas::find($id_equipo);
        $customer = ClienteGrua::find($Gruas->id_cliente);
        $seccion1 = seccion1::where('Folio', $Folio)->get();
        $seccion2 = seccion2::where('Folio', $Folio)->get();
        $seccion3 = seccion3::where('Folio', $Folio)->get();
        $seccion4 = seccion4::where('Folio', $Folio)->get();
        $seccion5 = seccion5::where('Folio', $Folio)->get();
        $seccion6 = seccion6::where('Folio', $Folio)->get();
        $seccion7 = seccion7::where('Folio', $Folio)->get();
        $seccion8 = seccion8::where('Folio', $Folio)->get();
        $seccion9 = seccion9::where('Folio', $Folio)->get();
        $seccion10 = seccion10::where('Folio', $Folio)->get();
        $seccion11 = seccion11::where('Folio', $Folio)->get();
        $Files = $this->Files($Folio);
        $comment = $this->Coments($Folio);
        $item = items::all();
        $pdf = PDF::loadView('PDF.vista',compact('customer','Gruas','item','Files','comment','i','j','seccion1','seccion2','seccion3','seccion4','seccion5','seccion6','seccion7','seccion8','seccion9','seccion10','seccion11'));
        return $pdf->download('Reporte'.$Folio.'.pdf');
    }

    public function pdf_prueba($id_equipo, $Folio)
    {
        $Grua = Gruas::find($id_equipo); //  consulta de informacion del equipo de la grua
        $customer = ClienteGrua::find($Grua->id_cliente); // consulta de informacion del cliente
        $seccion1 = seccion1::where('Folio', $Folio)->get();
        // $seccion2 = seccion2::where('Folio', $Folio)->get();
        // $seccion3 = seccion3::where('Folio', $Folio)->get();
        // $seccion4 = seccion4::where('Folio', $Folio)->get();
        // $seccion5 = seccion5::where('Folio', $Folio)->get();
        // $seccion6 = seccion6::where('Folio', $Folio)->get();
        // $seccion7 = seccion7::where('Folio', $Folio)->get();
        // $seccion8 = seccion8::where('Folio', $Folio)->get();
        // $seccion9 = seccion9::where('Folio', $Folio)->get();
        // $seccion10 = seccion10::where('Folio', $Folio)->get();
        // $seccion11 = seccion11::where('Folio', $Folio)->get();
        $data = $seccion1[0]->data['id_equipo'];
        $pdf = PDF::loadView('PDF.report', compact('customer', 'Grua', 'seccion1'));
        return $pdf->stream('Pruebas.pdf');
    }
}
