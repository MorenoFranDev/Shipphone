<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell;
use App\Models\service;
use GrahamCampbell\ResultType\Success;

class panel extends Controller
{
    public function storeSell(Request $request)
    {
        $newSell = new Sell();
        $newSell->telephone = $request->telephone;
        $newSell->priceBuy = $request->priceBuy;
        $newSell->remplacement = $request->remplacement;
        $newSell->priceRemplacement = $request->priceRemplacement;
        $newSell->payment = $request->payment ? true : false; 
        $newSell->priceSell = 0;
        $newSell->gain = 0;
        $newSell->save();
        return redirect()->route('list-sell')->with('Success','Compra registrada');
    }

    public function storeService(Request $request)
    {
        $dataService = request()->except('_token');
        $dataService['payment'] = $request->payment == "on" ? 1 : 0 ; 
        $dataService['status'] = 0; 
        service::insert($dataService);
        return redirect()->route('list-service')->with('success','Guardado correcto');
    }

    
    public function indexService()
    {
        $dataService['services'] = service::all();
        return view('layouts/list-service',$dataService);
    }

    public function indexSell(){
        $dataSell['Data'] = Sell::all();
        return view('layouts/list-ventas',$dataSell);  
    }


    public function showService($id){
        
    }


}
