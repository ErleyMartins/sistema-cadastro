<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use geekcom\ValidatorDocs\ValidatorProvider;
use DB;
use App\Http\Requests\CreateClientFormRequest;

class ClientsController extends Controller
{
    public function search(Client $client, Request $request){
        $data = $request->except('_token');
        $types = $client->genero();
        $searchs = $client->search($data);

        return view('admin.clients.search', compact('types','searchs'));
    }

    public function searchClient(Client $client, Request $request){
       $data = $request->except('_token');
       $types = $client->genero();
       $searchs = $client->search($data);

       return view('admin.clients.search', compact('types', 'searchs', 'data'));
    }

    public function createClient(Client $client){
        $types = $client->logradouro();
        $typeg = $client->genero();

        return view('admin.clients.create', compact('types', 'typeg'));
    }

    public function createClientStore(Request $request, CreateClientFormRequest $validate){

        $data = $request->except('_token');

        $nameClient = $data['nome'];
        $rand1 = rand(100000, 999999);

        $response = $validate->validated();

        $dados = DB::table('clients')->insert($data);

        if ($request->hasFile('image') && $request->file('image')->isValid())
                $name = $rand1.kebab_case($nameClient);
        
        $extenstion = $request->image->extension();
        $nameFile = "{$nameClient}.{$extenstion}";
        $data["image"] = $nameFile;

        $upload = $request->image->storeAs('users', $nameFile);

        if (!$upload)
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao carregar a imagem');

        if ($dados)
            return redirect()
                    ->route('admin')
                    ->with('success', 'Sucesso ao cadastrar');
        else
            return redirect()
                    ->back()
                    ->with('error', 'Erro ao cadastrar');
        
    }

    public function cpfValidate(ValidatorProvider $validate){
        $validate = $this->validate();
        dd($validate);
    }
}
