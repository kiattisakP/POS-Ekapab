<?php

namespace App\Http\Controllers;

use File;
use App\Sup;
use App\SupCon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;


class SupplierController extends Controller
{
    public function index(){
       
        $Supplier = Sup::when(request('search'), function($query){
                        return $query->where('SplName','like','%'.request('search').'%');
                    })
                    ->orderBy('created_at','desc')
                    ->paginate(8);
        return view('supplier.index_sup', compact('Supplier'));
    }

    public function create(){
        return view('supplier.create_sup');
    }

    public function store(Request $request){       

        DB::beginTransaction();

        try{
            $id = $request->id;

            if($id){
                $this->validate($request, [
                    'SplCode' => 'required',
                    'SplName' => 'required|min:2|max:200',
                    'SplNameOTH' => 'required',
                    'SplAddress1' => 'required',
                    'SplAddress2' => 'required',
                    'SplTaxNo' => 'required',
                    'SplTel' => 'required',
                    'SplEmail' => 'required',
                    'SplOthinfo' => 'required',
                    'SplCraditterm' => 'required',
                    'SplVatType' => 'required',
                    'SplLimit' => 'required',
                    'SplAmt' => 'required',
                    'PdtAge' => 'required',
                    'UnitType' => 'required',

                    'ContectName' => 'required',
                    'ContectTel' => 'required',
                    'ContectEmail' => 'required',
                    'ContectOth1' => 'required',
                    'ContectOth2' => 'required',
                ]);


                $Supplier_edit = Sup::find($id);
                $Supplier_con = SupCon::find($id);

                $Supplier = [
                    'SplCode' => $request->SplCode,
                    'SplName' => $request->SplName,    
                    'SplNameOTH' => $request->SplNameOTH,    
                    'SplAddress1' => $request->SplAddress1,
                    'SplAddress2' => $request->SplAddress2,
                    'SplTaxNo' => $request->SplTaxNo,
                    'SplTel' => $request->SplTel,
                    'SplEmail' => $request->SplEmail,
                    'SplOthinfo' => $request->SplOthinfo,
                    'SplCraditterm' => $request->SplCraditterm,
                    'SplVatType' => $request->SplVatType,
                    'SplLimit' => $request->SplLimit,
                    'SplAmt' => $request->SplAmt,
                    'PdtAge' => $request->PdtAge,
                    'UnitType' => $request->UnitType,        
                    'user_id' => Auth::id(),
                ];

                $SupCon = [
                    'SplCode' => $request->SplCode,
                    'ContectName' => $request->ContectName,    
                    'ContectTel' => $request->ContectTel,
                    'ContectEmail' => $request->ContectEmail,
                    'ContectOth1' => $request->ContectOth1,
                    'ContectOth2' => $request->ContectOth2,
                    'Sup_id' => $request->id,
                    'user_id' => Auth::id(),
                ];

                $Supplier_edit->update($Supplier);
                $Supplier_con->update($SupCon);

                $message = 'Data Berhasil di update';
                
                DB::commit();
                return redirect()->route('suppliers.index')->with('success',$message);  

            }else{
                $this->validate($request, [
                    'SplCode' => 'required',
                    'SplName' => 'required|min:2|max:200',
                    'SplNameOTH' => 'required',
                    'SplAddress1' => 'required',
                    'SplAddress2' => 'required',
                    'SplTaxNo' => 'required',
                    'SplTel' => 'required',
                    'SplEmail' => 'required',
                    'SplOthinfo' => 'required',
                    'SplCraditterm' => 'required',
                    'SplVatType' => 'required',
                    'SplLimit' => 'required',
                    'SplAmt' => 'required',
                    'PdtAge' => 'required',
                    'UnitType' => 'required',
                    
                    'ContectName' => 'required',
                    'ContectTel' => 'required',
                    'ContectEmail' => 'required',
                    'ContectOth1' => 'required',
                    'ContectOth2' => 'required',
                ]);

                $Supplier = Sup::create([
                    
                    'SplCode' => $request->SplCode,
                    'SplName' => $request->SplName,    
                    'SplNameOTH' => $request->SplNameOTH,    
                    'SplAddress1' => $request->SplAddress1,
                    'SplAddress2' => $request->SplAddress2,
                    'SplTaxNo' => $request->SplTaxNo,
                    'SplTel' => $request->SplTel,
                    'SplEmail' => $request->SplEmail,
                    'SplOthinfo' => $request->SplOthinfo,
                    'SplCraditterm' => $request->SplCraditterm,
                    'SplVatType' => $request->SplVatType,
                    'SplLimit' => $request->SplLimit,
                    'SplAmt' => $request->SplAmt,
                    'PdtAge' => $request->PdtAge,
                    'UnitType' => $request->UnitType,        
                    'user_id' => Auth::id()
                ]);        

                SupCon::create([
                    'SplCode' => $Supplier->SplCode,
                    'ContectName' => $request->ContectName,    
                    'ContectTel' => $request->ContectTel,
                    'ContectEmail' => $request->ContectEmail,
                    'ContectOth1' => $request->ContectOth1,
                    'ContectOth2' => $request->ContectOth2,
                    'Sup_id' => $Supplier->id,
                    'user_id' => Auth::id(),
                ]);

                $message = 'Data Berhasil di update';

                DB::commit();
                return redirect()->route('suppliers.index')->with('success',$message);   
            }            
        }
        catch(\Exeception $e){
            DB::rollback();
            return redirect()->route('supplers.create')->with('error',$e);
        }         
    }

    public function view($id){

        $sup = Sup::find($id);
        $supcon = SupCon::with('sups')->find($id);
        return view('supplier.view_sup',compact('sup','supcon'));
    }

    public function edit($id){
        
        $supplier = Sup::find($id);
        $supcon = SupCon::with('sups')->find($id);
        return view('supplier.edit_sup',compact('supplier','supcon'));
    }

    public function delete($id){
        
        Sup::find($id)->delete();
        SupCon::find($id)->delete();
        return redirect()->route('suppliers.index');
    }

    
    

}
