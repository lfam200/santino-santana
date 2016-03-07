<?php

namespace App\Http\Controllers;

use App\Pelage;
use App\Pet;
use App\Race;
use App\Specie;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $species = Specie::all();
        $races = Race::all();
        $pelages = Pelage::all();
        return view('pets.create',['id' => $id,'species' => $species, 'races' => $races, 'pelages' => $pelages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(),[
            'name'      => 'required',
            'birthday'  => 'required',
            'code'      => 'min:9'


        ]);

        if($validator->fails()){
            return redirect()
                ->route('pet_create_path')
                ->withErrors($validator)
                ->withInput();
        }

        if($request->get('code') == ''){
            $code = rand(645720000,645729999);

        }
        else{
            $code = $request->get('code');

        }

        //obtenemos el campo file definido en el formulario
        $file = $request->file('avatar');

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        Storage::disk('avatar_pet')->put($nombre,  \File::get($file));




        $pet = new Pet;

        $pet->person_id = $request->get('person_id');
        $pet->race_id = $request->get('race_id');
        $pet->pelage_id = $request->get('pelage_id');
        $pet->code = $code;
        $pet->name = $request->get('name');
        $pet->sex = $request->get('sex');
        $pet->avatar = $nombre;
        $pet->sterilization = $request->get('sterilization');
        $pet->color = 'sin color';
        $pet->birthday = $request->get('birthday');
        $pet->pedigree = $request->get('pedigree');
        $pet->pedigree_number = $request->get('pedigree_number');

        $pet->save();

        return redirect()->route('pet_show_path', $pet->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pet::findOrFail($id);

        return view('pets.show',['pet' => $pet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
