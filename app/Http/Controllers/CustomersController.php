<?php

namespace App\Http\Controllers;

use App\Person;
use App\Pet;
use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::with('person')->get();
        $users = User::with('person')->where('permissions','like','cliente')->get();


        return view('customers',['pets' => $pets,'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
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
            'dni'          => 'numeric',
            'first_name'   => 'required',
            'last_name'    => 'required',
            'email'        => 'email|required|unique:users',


        ]);

        if($validator->fails()){
            return redirect()
                ->route('customer_create_path')
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();

        try{
            $person = new Person;

            $person->dni           = $request->get('dni');
            $person->first_name    = $request->get('first_name');
            $person->last_name     = $request->get('last_name');
            $person->sex           = $request->get('sex');
            $person->birthday      = $request->get('birthday');
            $person->city          = $request->get('city');
            $person->address       = $request->get('address');
            $person->ref_address   = $request->get('ref_address');
            $person->phone         = $request->get('phone');
            $person->cell_phone    = $request->get('cell_phone');

            $person->save();
        }catch(ValidationException $e)
        {
            DB::rollback();
            return redirect()
                ->route('customer_create_path')
                ->withErrors( $e->getErrors() )
                ->withInput();
        }catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }

        try {
            $name = strtolower(substr($request->get('first_name'), 0, 1).strtok($request->get('last_name'), " "));

            $user = new User();

            $user->person_id    = $person->id;
            $user->name         = $name;
            $user->email        = $request->get('email');
            $user->password     = bcrypt($name);
            $user->permissions  = 'cliente';

            $user->save();
        } catch(ValidationException $e)
        {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()
                ->route('customer_create_path')
                ->withErrors( $e->getErrors() )
                ->withInput();
        } catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }

        DB::commit();

        return redirect()->route('customer_show_path', $user->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $customer = User::findOrFail($id);
        $pets = Pet::where('person_id',$id)->get();

        if($customer->permissions != 'cliente'){
            return view('errors.404');
        }else{
            return view('customers.show',[ 'customer' => $customer, 'pets' => $pets]);
        }


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
