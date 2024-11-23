<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class crudController extends Controller
{

    function submit(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $request->validate([
            'name'=>'required',
            'email' =>'required|email|unique:forms|email',
            'password'=>'required'

        ]);


        $pictureName = null;

        if($request->hasFile('image')){
            $picture = $request->file('image');
            $pictureName = time().'.'.$picture->getClientOriginalExtension();
            $picture->move(public_path('images'), $pictureName);
        }

        $form = new Form;
        $form->name = $request->name;
        $form->email  = $request->email;
        $form->password = $request->password;
        $form->image = $pictureName;

        $form->save();

        session()->flash('login','login success');

        return redirect(route('home.route'))->with('success','Form Submitted successfully');
    }


    function members(Request $request){


           $search = $request->search;
           
           $query = Form::query();
           $sortBy = $request->query('sortBy','name');
           $orderBy = $request->query('orderBy','asc');

           if($search){

                $query->where('name' ,'LIKE' ,"%".$search."%")->orWhere('email',"LIKE", "%".$search."%");
           }

           $get = $query->orderBy($sortBy,$orderBy)->paginate(10);


          return view('crud.members',compact('get','search'));
    }

    function edit(Request $request){

        $info = Form::findOrFail($request->id);

         return view('crud.update',['data'=> $info]);
    }

 
    public function updated(Request $request,$id){
            $student = Form::findOrFail($id);

            $pictureName = null;
    
            if($request->hasFile('image')){
                $picture = $request->file('image');
                $pictureName = time().'.'.$picture->getClientOriginalExtension();
                $picture->move(public_path('images'), $pictureName);
            }

            $student->update([
                 
                'name'=>$request->name,
                'email'=>$request->email,
                'image'=>$pictureName
            ]);

            session()->flash('update','Your Data updated Successfully');

            return redirect()->back();
      
    }

    public function destroy(Request $request){
           
       $id =$request->id;

       Form::where('id',$id)->delete();

       return redirect(route('member.route'))->with('Delete','Your data is deleted');

    }

   
}
