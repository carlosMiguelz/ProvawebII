<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipamento;
use Auth;
use Carbon\Carbon;
use App\Reserva;
use App\User;

class ReservasController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }

    public function index(){
        $user = Auth::user()->id;
        
        $reservas = Reserva::where('user_id','=',$user)->get();
        $equipamentos = Equipamento::all();

        return view('reservas.index',compact('reservas','equipamentos'));
    }

    public function create(){
        $equips = Equipamento::all();
        $user = Auth::user();

        

        return view('reservas.cadastro', compact('equips','user'));
    }

    public function save(Request $req){


        //DATAS
        $dataini = explode('/', $req->inicio_data);
        $datafim = explode('/', $req->fim_data);

        list($diaini,$mesini,$anoini) = $dataini;
        list($diafim,$mesfim,$anofim) = $datafim;
        
        //HORAIOS
        $horaini = explode(':', $req->inicio_horario);
        $horafim = explode(':', $req->fim_horario);

        list($hora_ini,$min_ini) = $horaini;
        list($hora_fim,$min_fim) = $horafim;
       
        $dtini = Carbon::create($anoini,$mesini,$diaini,$hora_ini,$min_ini,00);
        $dtfim = Carbon::create($anofim,$mesfim,$diafim,$hora_fim,$min_fim,00);

        if (!$dtini->isBefore($dtfim)){
            return redirect()->back()->with('errordata','date error');
        }


        $verificar = Reserva::all();
        $inicio = $dtini->isoFormat('YYYY-MM-DD');
        $fim = $dtfim->isoFormat('HH:mm:ss');

        foreach ($verificar as $resBD) {
            if ($resBD->equipamento_id == $req->equipamento_id){
                if ($inicio < $resBD->inicio_data && $fim > $resBD->inicio_data){
                    return redirect()->back();
                }
            }   
        }

        $reserva = new Reserva;
        $reserva->inicio_data = $dtini->isoFormat('YYYY-MM-DD'); 
        $reserva->fim_data = $dtfim->isoFormat('YYYY-MM-DD');
        $reserva->inicio_horario = $dtini->isoFormat('HH:mm:ss');
        $reserva->fim_horario = $dtfim->isoFormat('HH:mm:ss');
        $reserva->equipamento_id = $req->equipamento_id;
        $reserva->user_id = Auth::user()->id;
        $reserva->save();

        return redirect()->route('reservas.index');



    }
}