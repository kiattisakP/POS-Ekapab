<?php

namespace App\Http\Controllers;

use File;
use App\Product;
use App\Barcode;
use App\Unit;
use App\HistoryProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    
    public function index(Request $request){
       
        $product = Product::when(request('search'), function($query){
                        return $query->where('PdtSKUCode','like','%'.request('search').'%');
                    })
                    ->orderBy('created_at','desc')
                    ->paginate(8);

        return view('product.index',compact('product'));
        
    }


    public function create(){
        return view('product.create');
    }

    public function store(Request $request){       

        DB::beginTransaction();

        try{
            $id = $request->id;

            if($id){
                $this->validate($request, [
                    'PdtSKUCode' => 'required',
                    'PdtName' => 'required|min:2|max:200',
                    'PdtNameOTH' => 'required',
                    'PdtStkQty' => 'required',
                    'PdtStkAmt' => 'required',
                    'PdtVatType' => 'required',
                    'PdtType' => 'required',
                    'PdtGrpCode' => 'required',
                    'PdtBndCode' => 'required',
                    'PdtSizeCode' => 'required',
                    'PdtColorCode' => 'required',
                    'SplCode' => 'required',
                    'GLAccNO' => 'required',
                    'PdtAge' => 'required',
                    'UnitType' => 'required', 

                    'PdtBarcode' => 'required', 
                    'PdtSKURef' => 'required', 
                    'PdtUnitCode' => 'required', 
                    'Price1' => 'required', 
                    'Price2' => 'required', 
                    'Price3' => 'required', 
                    'Price4' => 'required', 
                    'Price5' => 'required',

                    'UnitCode' => 'required',
                    'UnitName' => 'required',
                    'UnitFactor' => 'required',

                    'image' => 'mimes:jpeg,jpg,png,gif|required|max:25000',
                    

                ]);

                if($request->addQty){
                    $qty = $request->PdtStkQty + $request->addQty;
                    if($qty < 0){
                        return redirect()->back()->with('errorQty','Quantity cant be lower than zero');
                    }
                }else{
                    $qty = $request->PdtStkQty;
                }

                $product_id = Product::find($id);
                $Unit_edit = Unit::find($id);
                $Barcode_edit = Barcode::find($id);
                
                if($request->has('image')){
                    $gambar = $request->image;
                    $new_gambar = time().$gambar->getClientOriginalName();
                    Image::make($gambar->getRealPath())->resize(null, 200, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(public_path('uploads/images/' . $new_gambar));

                    File::delete(public_path($product_id->image));


                    $product = [
                        'PdtSKUCode' => $request->PdtSKUCode,
                        'PdtName' => $request->PdtName,    
                        'PdtNameOTH' => $request->PdtNameOTH,    
                        'PdtStkQty' => $request->PdtStkQty,
                        'PdtStkAmt' => $request->PdtStkAmt,
                        'PdtVatType' => $request->PdtVatType,
                        'PdtType' => $request->PdtType,
                        'PdtGrpCode' => $request->PdtGrpCode,
                        'PdtBndCode' => $request->PdtBndCode,
                        'PdtSizeCode' => $request->PdtSizeCode,
                        'PdtColorCode' => $request->PdtColorCode,
                        'SplCode' => $request->SplCode,
                        'GLAccNO' => $request->GLAccNO,
                        'PdtAge' => $request->PdtAge,
                        'UnitType' => $request->UnitType, 
                        
                        'image' => 'uploads/images/'.$new_gambar,
                        'user_id' => Auth::id()
                    ];

                    
                }
                else{
                    $product = [
                        'PdtSKUCode' => $request->PdtSKUCode,
                        'PdtName' => $request->PdtName,    
                        'PdtNameOTH' => $request->PdtNameOTH,    
                        'PdtStkQty' => $request->PdtStkQty,
                        'PdtStkAmt' => $request->PdtStkAmt,
                        'PdtVatType' => $request->PdtVatType,
                        'PdtType' => $request->PdtType,
                        'PdtGrpCode' => $request->PdtGrpCode,
                        'PdtBndCode' => $request->PdtBndCode,
                        'PdtSizeCode' => $request->PdtSizeCode,
                        'PdtColorCode' => $request->PdtColorCode,
                        'SplCode' => $request->SplCode,
                        'GLAccNO' => $request->GLAccNO,
                        'PdtAge' => $request->PdtAge,
                        'UnitType' => $request->UnitType, 
                            
                        'user_id' => Auth::id(),
                        'user_name' => Auth::user($id)->name,
                        
                    ];
                }
                $Barcode = [
                    'PdtSKUCode' => $request->PdtSKUCode,
                    'PdtBarcode' => $request->PdtBarcode,
                    'PdtSKURef' => $request->PdtSKURef,
                    'PdtUnitCode' => $request->PdtUnitCode,
                    'Price1' => $request->Price1,
                    'Price2' => $request->Price2,
                    'Price3' => $request->Price3,
                    'Price4' => $request->Price4,
                    'Price5' => $request->Price5,
                    'PdtAge' => $request->PdtAge,
                    'UnitType' => $request->UnitType,  
                    'user_id' => Auth::id(),
                    'product_id' => $request->id,
                ];

                $Unit = [
                    'UnitCode' => $request->UnitCode,
                    'UnitName' => $request->UnitName,
                    'UnitFactor' => $request->UnitFactor,
                    'PdtAge' => $request->PdtAge,
                    'UnitType' => $request->UnitType,
                    'user_id' => Auth::id(),
                    'product_id' => $request->id,
                ];

                $product_id->update($product);
                $Barcode_edit->update($Barcode);
                $Unit_edit->update($Unit);

                if($request->addQty){
                    HistoryProduct::create([
                        'product_id' => $product_id->id,
                        'user_id' => Auth::id(),
                        'PdtStkQty' => $request->PdtStkQty,
                        'UnitType' => $request->UnitType,
                        'qtyChange' => $request->addQty,
                    ]);
                }
                
                $message = 'Data Berhasil di update';
                
                DB::commit();
                return redirect()->route('products.index')->with('success',$message);   
            }else{
                $this->validate($request, [
                    'PdtSKUCode' => 'required',
                    'PdtName' => 'required|min:2|max:200',
                    'PdtNameOTH' => 'required',
                    'PdtStkQty' => 'required',
                    'PdtStkAmt' => 'required',
                    'PdtVatType' => 'required',
                    'PdtType' => 'required',
                    'PdtGrpCode' => 'required',
                    'PdtBndCode' => 'required',
                    'PdtSizeCode' => 'required',
                    'PdtColorCode' => 'required',
                    'SplCode' => 'required',
                    'GLAccNO' => 'required',
                    'PdtAge' => 'required',
                    'UnitType' => 'required',
                    
                    'PdtBarcode' => 'required', 
                    'PdtSKURef' => 'required', 
                    'PdtUnitCode' => 'required', 
                    'Price1' => 'required', 
                    'Price2' => 'required', 
                    'Price3' => 'required', 
                    'Price4' => 'required', 
                    'Price5' => 'required',

                    'UnitCode' => 'required',
                    'UnitName' => 'required',
                    'UnitFactor' => 'required',

                    'image' => 'mimes:jpeg,jpg,png,gif|required|max:25000',
                    
                ]);

                $gambar = $request->image;
                $new_gambar = time().$gambar->getClientOriginalName();

                $product = Product::create([
                    
                    'PdtSKUCode' => $request->PdtSKUCode,
                    'PdtName' => $request->PdtName,    
                    'PdtNameOTH' => $request->PdtNameOTH,    
                    'PdtStkQty' => $request->PdtStkQty,
                    'PdtStkAmt' => $request->PdtStkAmt,
                    'PdtVatType' => $request->PdtVatType,
                    'PdtType' => $request->PdtType,
                    'PdtGrpCode' => $request->PdtGrpCode,
                    'PdtBndCode' => $request->PdtBndCode,
                    'PdtSizeCode' => $request->PdtSizeCode,
                    'PdtColorCode' => $request->PdtColorCode,
                    'SplCode' => $request->SplCode,
                    'GLAccNO' => $request->GLAccNO,
                    'PdtAge' => $request->PdtAge,
                    'UnitType' => $request->UnitType,   

                    'image' => 'uploads/images/'.$new_gambar,
                    'user_id' => Auth::id(),
                    'user_name' => Auth::user($id)->name,
                ]);        

                Image::make($gambar->getRealPath())->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/images/' . $new_gambar));

                HistoryProduct::create([
                    'product_id' => $product->id,
                    'user_id' => Auth::id(),
                    'PdtStkQty' => $request->PdtStkQty,
                    'UnitType' => $request->UnitType,
                    'qtyChange' => 0,
                ]);

                Barcode::create([
                    'PdtSKUCode' => $product->PdtSKUCode,
                    'PdtBarcode' => $request->PdtBarcode,
                    'PdtSKURef' => $request->PdtSKURef,
                    'PdtUnitCode' => $request->PdtUnitCode,
                    'Price1' => $request->Price1,
                    'Price2' => $request->Price2,
                    'Price3' => $request->Price3,
                    'Price4' => $request->Price4,
                    'Price5' => $request->Price5,
                    'PdtAge' => $product->PdtAge,
                    'UnitType' => $product->UnitType,  
                    'user_id' => Auth::id(),
                    'product_id' => $product->id,
                ]);

                Unit::create([
                    'UnitCode' => $request->UnitCode,
                    'UnitName' => $request->UnitName,
                    'UnitFactor' => $request->UnitFactor,
                    'PdtAge' => $product->PdtAge,
                    'UnitType' => $product->UnitType,
                    'user_id' => Auth::id(),
                    'product_id' => $product->id,
                ]);

                //$barcode = Barcode::find($id);
                //$product->barcodes()->attach($barcode);

                //$unit = Unit::find($id);
                //$product->units()->attach($unit);

                $message = 'Data Berhasil di simpan';

                DB::commit();
                return redirect()->route('products.index',compact('product'))->with('success',$message);   
            }            
        }
        catch(\Exeception $e){
            DB::rollback();
            return redirect()->route('products.create')->with('error',$e);
        }         
    }



    public function view($id){

        $product = Product::find($id);
        $barcode = Barcode::with('product')->find($id);
        $unit = Unit::with('product')->find($id);
        return view('viewpdt.view_product',compact('product','barcode','unit'));
    }

    public function edit($id){
        
        $product = Product::find($id);
        $history = HistoryProduct::where('id',$id)->orderBy('created_at','desc')->get();
        $barcode = Barcode::with('product')->find($id);
        $unit = Unit::with('product')->find($id);
        return view('viewpdt.edit_product',compact('product','history','barcode','unit'));
    }

    public function delete($id){
        
        Product::find($id)->delete();
        Barcode::find($id)->delete();
        Unit::find($id)->delete();
        return redirect()->route('products.index');
    }

    


    public function destroy(Request $request,$id){
        DB::beginTransaction();

        try{
        $product = Product::find($id);
        $product->delete();
        File::delete(public_path($product->image)); 

        DB::commit();
        return redirect()->route('products.index')->with('success','Product berhasil dihapus');                             
        }
        catch(\Exeception $e){
            DB::rollback();      
            return redirect()->route('products.index')->with('error',$e);      
        }  

        
    }
    

}
