<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UsuariosController extends Controller
{
    public function index()
    {
        return view('datatableSS');
    }
    //Tarda 15 segundos
    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::take(100000)->get();
            return DataTables::of($data)->make(true);;
                /* ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true); */
        }
    }
    //Tarda 2 segundos
    public function paginate(){
        $usuarios = User::take(100000)->paginate(10);
        return view('paginate', compact('usuarios'));
    }
}
