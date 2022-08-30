<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Kategory;
use App\Models\Ofisitem;
use App\Models\Ofisnov;
use App\Models\Qidaitem;
use App\Models\Qidanov;
use App\Models\Teserrufatitem;
use App\Models\Teserrufatnov;
use App\Models\Elektronitem;
use App\Models\Elektronnov;
use App\Models\Dibcekitem;
use App\Models\Dibceknov;
use App\Models\Hediyyeitem;
use App\Models\Hediyyenov;
use App\Models\Coffeitem;
use App\Models\Coffenov;
use App\Models\Haqqimizda;
use App\Models\Elaqe;
use App\Models\Catdirilma;
use App\Models\Qaytarilma;
use App\Models\Items;




class Admincontroller extends Controller
{
    public function admindex(){
        return view('admin.index');
    }

    public function redirects(){
        
        $usertype=Auth::user()->usertype;

        if($usertype=="1"){
            return view("admin.adminpage");
        }
        else{
            return view("admin.index");
        }
    }
// kategory
    public function kategory(){
        $data=Kategory::all();
        return view('admin.kategory',compact('data'));
    }

    public function Storekategory(Request $req){
        $data=new Kategory;
        $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("kategoryimage",$imagename);
        $data->image=$imagename;
        $data->basliq=$req->basliq;
        $data->save();
        return redirect()->back();

    }

    public function editkategory($id){
     $data=Kategory::find($id);
        return view('admin.editkategory',['data'=>$data]);
    }

    public function updatekategory(Request $req){
        $data=Kategory::find($req->id);
        $image=$req->image;
        $imagename=time().".".$image->getClientOriginalExtension();
        $req->image->move("kategoryimage",$imagename);
        $data->image=$imagename;
        $data->basliq=$req->basliq;
        $data->save();
        return redirect("kategory");
    }

    public function deletekategory($id){
        $data=Kategory::find($id);
        $data->delete();
        return redirect("kategory");
            }

            //ofis item

            public function ofisitem(){
                $data=Ofisitem::paginate(5);
                $kate=Kategory::all();
                $item=Items::all();
                return view('admin.ofisitem',compact('data',"kate","item"));
            }


            public function Storeofisitem(Request $req){
             $category=Kategory::findOrFail($req->category_id);
             $products= new Items;
             $products->basliq=$req->basliq;
             $category->items()->save($products);
             return redirect()->back();
            
            }

            //  $category->items()->create([
            //   "basliq"=>$req->basliq
                        //            ]);
            //      return redirect()->back();
            // }
           
        
            // public function Storeofisitem(Request $req){
            //     $data=new Ofisitem;
            //     $image=$req->image;
            //     $imagename=time().".".$image->getClientOriginalExtension();
            //     $req->image->move("ofisimage",$imagename);
                
            //     $data->image=$imagename;
            //     $data->basliq=$req->basliq;
            //     $data->about=$req->about;
            //     $data->price=$req->price;
            //     $data->save();
            //     return redirect()->back();
        
            // }
        
            public function editofisitem($id){
              //$data=Ofisitem::find($id);
             $kate=Kategory::all();
             $item=Items::find($id);
                return view('admin.editofisitem',compact('item','kate'));
            }
        
            public function updateofisitem(Request $request,$id){
             
                $product=Items::findOrFail($id);
                $product->basliq=$request->basliq;
                $product->category_id = $request->category_id;
                    $product->update();

                // dd($request->all());
                // $item = Items::where()
                    
                // $category=Kategory::findOrFail($req->category_id);
                // $category->items()->update([
                //     'basliq'=>$req->basliq,
                    
                    
                // ]);
                return redirect("ofisitem");
            }



            // public function updateofisitem(Request $req){
            //     $data=Ofisitem::find($req->id);
            //     $image=$req->image;
            //     $imagename=time().".".$image->getClientOriginalExtension();
            //     $req->image->move("ofisimage",$imagename);
                
            //     $data->image=$imagename;
            //     $data->basliq=$req->basliq;
            //     $data->about=$req->about;
            //     $data->price=$req->price;
            //     $data->save();
            //     return redirect("ofisitem");
            // }
        


            public function deleteofisitem($id){
                $data=Items::find($id);
                $data->delete();
                return redirect("ofisitem");
                    }


                     //qida item

            public function qidaitem(){
                $data=Qidaitem::paginate(5);
                return view('admin.qidaitem',compact('data'));
            }
        
            public function Storeqidaitem(Request $req){
                $data=new Qidaitem;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("qidaimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editqidaitem($id){
             $data=Qidaitem::find($id);
                return view('admin.editqidaitem',['data'=>$data]);
            }
        
            public function updateqidaitem(Request $req){
                $data=Qidaitem::find($req->id);
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("qidaimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect("qidaitem");
            }
        
            public function deleteqidaitem($id){
                $data=Qidaitem::find($id);
                $data->delete();
                return redirect("qidaitem");
                    }

                     //teserrufat item

            public function teserrufatitem(){
                $data=Teserrufatitem::paginate(5);
                return view('admin.teserrufatitem',compact('data'));
            }
        
            public function Storeteserrufatitem(Request $req){
                $data=new Teserrufatitem;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("teserrufatimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editteserrufatitem($id){
             $data=Teserrufatitem::find($id);
                return view('admin.editteserrufatitem',['data'=>$data]);
            }
        
            public function updateteserrufatitem(Request $req){
                $data=Teserrufatitem::find($req->id);
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("teserrufatimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect("teserrufatitem");
            }
        
            public function deleteteserrufatitem($id){
                $data=Teserrufatitem::find($id);
                $data->delete();
                return redirect("teserrufatitem");
                    }

                    //elektron item

            public function elektronitem(){
                $data=Elektronitem::paginate(5);
                return view('admin.elektronitem',compact('data'));
            }
        
            public function Storeelektronitem(Request $req){
                $data=new Elektronitem;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("elektronimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editelektronitem($id){
             $data=Elektronitem::find($id);
                return view('admin.editelektronitem',['data'=>$data]);
            }
        
            public function updateelektronitem(Request $req){
                $data=Elektronitem::find($req->id);
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("elektronimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect("elektronitem");
            }
        
            public function deleteelektronitem($id){
                $data=Elektronitem::find($id);
                $data->delete();
                return redirect("elektronitem");
                    }

                    //dibcek item

            public function dibcekitem(){
                $data=Dibcekitem::paginate(5);
                return view('admin.dibcekitem',compact('data'));
            }
        
            public function Storedibcekitem(Request $req){
                $data=new Dibcekitem;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("dibcekimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editdibcekitem($id){
             $data=Dibcekitem::find($id);
                return view('admin.editdibcekitem',['data'=>$data]);
            }
        
            public function updatedibcekitem(Request $req){
                $data=Dibcekitem::find($req->id);
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("dibcekimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect("dibcekitem");
            }
        
            public function deletedibcekitem($id){
                $data=Dibcekitem::find($id);
                $data->delete();
                return redirect("dibcekitem");
                    }

                    //hediyye item

            public function hediyyeitem(){
                $data=Hediyyeitem::paginate(5);
                return view('admin.hediyyeitem',compact('data'));
            }
        
            public function Storehediyyeitem(Request $req){
                $data=new Hediyyeitem;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("hediyyeimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect()->back();
        
            }
        
            public function edithediyyeitem($id){
             $data=Hediyyeitem::find($id);
                return view('admin.editdibcekitem',['data'=>$data]);
            }
        
            public function updatehediyyeitem(Request $req){
                $data=Hediyyeitem::find($req->id);
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("hediyyeimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect("hediyyeitem");
            }
        
            public function deletehediyyeitem($id){
                $data=Hediyyeitem::find($id);
                $data->delete();
                return redirect("hediyyeitem");
                    }

                      //coffe item

            public function coffeitem(){
                $data=Coffeitem::paginate(5);
                return view('admin.coffeitem',compact('data'));
            }
        
            public function Storecoffeitem(Request $req){
                $data=new Coffeitem;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("coffeimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editcoffeitem($id){
             $data=Coffeitem::find($id);
                return view('admin.editcoffeitem',['data'=>$data]);
            }
        
            public function updatecoffeitem(Request $req){
                $data=Coffeitem::find($req->id);
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("coffeimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect("coffeitem");
            }
        
            public function deletecoffeitem($id){
                $data=Coffeitem::find($id);
                $data->delete();
                return redirect("coffeitem");
                    }

                    //haqqimizda

                    public function haqqimizda(){
                        $data=Haqqimizda::paginate(5);
                        return view('admin.haqqimizda',compact('data'));
                    }
                
                    public function Storehaqqimizda(Request $req){
                        $data=new Haqqimizda;
                        $data->basliq=$req->basliq;
                        $data->about=$req->about;
                        $data->save();
                        return redirect()->back();
                
                    }
                
                    public function edithaqqimizda($id){
                     $data=Haqqimizda::find($id);
                        return view('admin.edithaqqimizda',['data'=>$data]);
                    }
                
                    public function updatehaqqimizda(Request $req){
                        $data=Haqqimizda::find($req->id);
                        $data->basliq=$req->basliq;
                        $data->about=$req->about;
                        $data->save();
                        return redirect("haqqimizda");
                    }
                
                    public function deletehaqqimizda($id){
                        $data=Haqqimizda::find($id);
                        $data->delete();
                        return redirect("haqqimizda");
                            }

                              //elaqe

                    public function elaqe(){
                        $data=Elaqe::paginate(5);
                        return view('admin.elaqe',compact('data'));
                    }
                
                    public function Storeelaqe(Request $req){
                        $data=new Elaqe;
                        $data->tel=$req->tel;
                        $data->email=$req->email;
                        $data->unvan=$req->unvan;
                        $data->save();
                        return redirect()->back();
                
                    }
                
                    public function editelaqe($id){
                     $data=Elaqe::find($id);
                        return view('admin.editelaqe',['data'=>$data]);
                    }
                
                    public function updateelaqe(Request $req){
                        $data=Elaqe::find($req->id);
                        $data->tel=$req->tel;
                        $data->email=$req->email;
                        $data->unvan=$req->unvan;
                       
                        $data->save();
                        return redirect("elaqe");
                    }
                
                    public function deleteelaqe($id){
                        $data=Elaqe::find($id);
                        $data->delete();
                        return redirect("elaqe");
                            }

                            //catdirilma

                    public function catdirilma(){
                        $data=Catdirilma::paginate(5);
                        return view('admin.catdirilma',compact('data'));
                    }
                
                    public function Storecatdirilma(Request $req){
                        $data=new Catdirilma;
                        $data->cat_price=$req->cat_price;
                        $data->cat_price_title=$req->cat_price_title;
                        $data->cat_time=$req->cat_time;
                        $data->cat_time_title=$req->cat_time_title;
                        $data->cat_sert=$req->cat_sert;
                        $data->cat_sert_title=$req->cat_sert_title;
                        $data->save();
                        return redirect()->back();
                
                    }
                
                    public function editcatdirilma($id){
                     $data=Catdirilma::find($id);
                        return view('admin.editcatdirilma',['data'=>$data]);
                    }
                
                    public function updatecatdirilma(Request $req){
                        $data=Catdirilma::find($req->id);
                        $data->cat_price=$req->cat_price;
                        $data->cat_price_title=$req->cat_price_title;
                        $data->cat_time=$req->cat_time;
                        $data->cat_time_title=$req->cat_time_title;
                        $data->cat_sert=$req->cat_sert;
                        $data->cat_sert_title=$req->cat_sert_title;
                       
                        $data->save();
                        return redirect("catdirilma");
                    }
                
                    public function deletecatdirilma($id){
                        $data=Catdirilma::find($id);
                        $data->delete();
                        return redirect("catdirilma");
                            }

                              //geri_qaytarma

                    public function geri_qaytarma(){
                        $data=Qaytarilma::paginate(5);
                        return view('admin.geri_qaytarma',compact('data'));
                    }
                
                    public function Storegeri_qaytarma(Request $req){
                        $data=new Qaytarilma;
                        $data->qayda_1=$req->qayda_1;
                        $data->qayda_2=$req->qayda_2;
                        $data->qayda_3=$req->qayda_3;
                        $data->qayda_4=$req->qayda_4;
                        $data->qayda_5=$req->qayda_5;
                        $data->qayda_6=$req->qayda_6;
                        $data->qayda_7=$req->qayda_7;
                        $data->qayda_8=$req->qayda_8;
                        $data->qayda_9=$req->qayda_9;
                        $data->qayda_10=$req->qayda_10;
                        $data->qayda_11=$req->qayda_11;
                        $data->qayda_12=$req->qayda_12;
                        $data->qayda_13=$req->qayda_13;
                        $data->qayda_14=$req->qayda_14;
                        $data->qayda_15=$req->qayda_15;
                        
                        $data->save();
                        return redirect()->back();
                
                    }
                
                    public function editgeri_qaytarma($id){
                     $data=Qaytarilma::find($id);
                        return view('admin.editgeri_qaytarma',['data'=>$data]);
                    }
                
                    public function updategeri_qaytarma(Request $req){
                        $data=Qaytarilma::find($req->id);
                        $data->qayda_1=$req->qayda_1;
                        $data->qayda_2=$req->qayda_2;
                        $data->qayda_3=$req->qayda_3;
                        $data->qayda_4=$req->qayda_4;
                        $data->qayda_5=$req->qayda_5;
                        $data->qayda_6=$req->qayda_6;
                        $data->qayda_7=$req->qayda_7;
                        $data->qayda_8=$req->qayda_8;
                        $data->qayda_9=$req->qayda_9;
                        $data->qayda_10=$req->qayda_10;
                        $data->qayda_11=$req->qayda_11;
                        $data->qayda_12=$req->qayda_12;
                        $data->qayda_13=$req->qayda_13;
                        $data->qayda_14=$req->qayda_14;
                        $data->qayda_15=$req->qayda_15;
                        $data->save();
                        return redirect("geri_qaytarma");
                    }
                
                    public function deletegeri_qaytarma($id){
                        $data=Qaytarilma::find($id);
                        $data->delete();
                        return redirect("geri_qaytarma");
                            }


                              //ofisnov

            public function ofisnov(){
                $data=Ofisnov::paginate(5);
                return view('admin.ofisnov',compact('data'));
            }
        
            public function Storeofisnov(Request $req){
                $data=new Ofisnov;
                $data->basliq=$req->basliq;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editofisnov($id){
             $data=Ofisnov::find($id);
                return view('admin.editofisnov',['data'=>$data]);
            }
        
            public function updateofisnov(Request $req){
                $data=Ofisnov::find($req->id);
                $data->basliq=$req->basliq;
                $data->save();
                return redirect("ofisnov");
            }
        
            public function deleteofisnov($id){
                $data=Ofisnov::find($id);
                $data->delete();
                return redirect("ofisinov");
                    }

                     //qidanov

            public function qidanov(){
                $data=Qidanov::paginate(5);
                return view('admin.qidanov',compact('data'));
            }
        
            public function Storeqidanov(Request $req){
                $data=new Qidanov;
                $data->basliq=$req->basliq;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editqidanov($id){
             $data=Qidanov::find($id);
                return view('admin.editqidanov',['data'=>$data]);
            }
        
            public function updateqidanov(Request $req){
                $data=Qidanov::find($req->id);
                $data->basliq=$req->basliq;
                $data->save();
                return redirect("qidanov");
            }
        
            public function deleteqidanov($id){
                $data=Qidanov::find($id);
                $data->delete();
                return redirect("qidanov");
                    }

                     //teserrufat item

            public function teserrufatnov(){
                $data=Teserrufatnov::paginate(5);
                return view('admin.teserrufatnov',compact('data'));
            }
        
            public function Storeteserrufatnov(Request $req){
                $data=new Teserrufatnov;
                $data->basliq=$req->basliq;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editteserrufatnov($id){
             $data=Teserrufatnov::find($id);
                return view('admin.editteserrufatnov',['data'=>$data]);
            }
        
            public function updateteserrufatnov(Request $req){
                $data=Teserrufatnov::find($req->id);
                $data->basliq=$req->basliq;
                $data->save();
                return redirect("teserrufatnov");
            }
        
            public function deleteteserrufatnov($id){
                $data=Teserrufatnov::find($id);
                $data->delete();
                return redirect("teserrufatnov");
                    }

                    //elektronnov

            public function elektronnov(){
                $data=Elektronnov::paginate(5);
                return view('admin.elektronnov',compact('data'));
            }
        
            public function Storeelektronnov(Request $req){
                $data=new Elektronnov;
                $data->basliq=$req->basliq;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editelektronnov($id){
             $data=Elektronnov::find($id);
                return view('admin.editelektronnov',['data'=>$data]);
            }
        
            public function updateelektronnov(Request $req){
                $data=Elektronnov::find($req->id);
                $data->basliq=$req->basliq;
                $data->save();
                return redirect("elektronnov");
            }
        
            public function deleteelektronnov($id){
                $data=Elektronnov::find($id);
                $data->delete();
                return redirect("elektronnov");
                    }

                    //dibceknov

            public function dibceknov(){
                $data=Dibceknov::paginate(5);
                return view('admin.dibceknov',compact('data'));
            }
        
            public function Storedibceknov(Request $req){
                $data=new Dibceknov;
                $data->basliq=$req->basliq;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editdibceknov($id){
             $data=Dibceknov::find($id);
                return view('admin.editdibceknov',['data'=>$data]);
            }
        
            public function updatedibceknov(Request $req){
                $data=Dibceknov::find($req->id);
                $data->basliq=$req->basliq;
                $data->save();
                return redirect("dibceknov");
            }
        
            public function deletedibceknov($id){
                $data=Dibceknov::find($id);
                $data->delete();
                return redirect("dibceknov");
                    }

                    //hediyye item

            public function hediyyenov(){
                $data=Hediyyenov::paginate(5);
                return view('admin.hediyyenov',compact('data'));
            }
        
            public function Storehediyyenov(Request $req){
                $data=new Hediyyenov;
                $data->basliq=$req->basliq;
                $data->save();
                return redirect()->back();
        
            }
        
            public function edithediyyenov($id){
             $data=Hediyyenov::find($id);
                return view('admin.edithediyyenov',['data'=>$data]);
            }
        
            public function updatehediyyenov(Request $req){
                $data=Hediyyenov::find($req->id);
                $data->basliq=$req->basliq;
                $data->save();
                return redirect("hediyyenov");
            }
        
            public function deletehediyyenov($id){
                $data=Hediyyenov::find($id);
                $data->delete();
                return redirect("hediyyenov");
                    }

                      //coffenov

            public function coffenov(){
                $data=Coffenov::paginate(5);
                return view('admin.coffenov',compact('data'));
            }
        
            public function Storecoffenov(Request $req){
                $data=new Coffenov;
                $data->basliq=$req->basliq;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editcoffenov($id){
             $data=Coffenov::find($id);
                return view('admin.editcoffenov',['data'=>$data]);
            }
        
            public function updatecoffenov(Request $req){
                $data=Coffenov::find($req->id);
                $data->basliq=$req->basliq;
                $data->save();
                return redirect("coffenov");
            }
        
            public function deletecoffenov($id){
                $data=Coffenov::find($id);
                $data->delete();
                return redirect("coffenov");
                    }

}
