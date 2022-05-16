<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = $this->client->all();
        return view('app.clients.clients', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.clients.newClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'id_client' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:clients|min:8|max:255'
        ]);

        $client = $this->client;

        if ($client === null) :
            $request->session()->flash('alert-danger', 'Erro ao tentar Realizar Operação');
            return redirect('app/clients/create');
        else :
            $client->name = $request->name;
            $client->id_client = $request->id_client;
            $client->phone = $request->phone;
            $client->email = $request->email;
            $client->save();
            $request->session()->flash('alert-alert-success', 'Operação Realizada com Sucesso!');
            return redirect('app/clients');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $client = $this->client->find($id);
        return view('app.clients.viewClient', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = $this->client->find($id);
        return view('app.clients.editClient', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'id_client' => 'required',
            'phone' => 'required',
            'email' => 'required|min:8|max:255'
        ]);

        $client = $this->client->find($id);
        if ($client === null) :
            $request->session()->flash('alert-danger', 'Erro ao tentar Realizar Operação');
            return redirect('app/clients/edit');
        else :
            $client->name = $request->name;
            $client->id_client = $request->id_client;
            $client->phone = $request->phone;
            $client->email = $request->email;
            $client->update();
            $request->session()->flash('alert-success', 'Operação Realizada com Sucesso!');
            return redirect('app/clients');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = $this->client->find($id);
        if ($client === null) :
            return redirect('app/clients')->with('alert-danger', 'Erro ao tentar Realizar Operação!');
        else :
            $client->delete();
            return redirect('app/clients')->with('alert-success', 'Operação Realizada com Sucesso!');
        endif;
    }
}
