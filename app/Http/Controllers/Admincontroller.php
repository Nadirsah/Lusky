<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Kategory;
use App\Models\Ofisitem;
use App\Models\Qidaitem;
use App\Models\Teserrufatitem;
use App\Models\Elektronitem;
use App\Models\Dibcekitem;
use App\Models\Hediyyeitem;
use App\Models\Coffeitem;



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
                return view('admin.ofisitem',compact('data'));
            }
        
            public function Storeofisitem(Request $req){
                $data=new Ofisitem;
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("ofisimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect()->back();
        
            }
        
            public function editofisitem($id){
             $data=Ofisitem::find($id);
                return view('admin.editofisitem',['data'=>$data]);
            }
        
            public function updateofisitem(Request $req){
                $data=Ofisitem::find($req->id);
                $image=$req->image;
                $imagename=time().".".$image->getClientOriginalExtension();
                $req->image->move("ofisimage",$imagename);
                
                $data->image=$imagename;
                $data->basliq=$req->basliq;
                $data->about=$req->about;
                $data->price=$req->price;
                $data->save();
                return redirect("ofisitem");
            }
        
            public function deleteofisitem($id){
                $data=Ofisitem::find($id);
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

}
