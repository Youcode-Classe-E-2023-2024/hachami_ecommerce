<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Category;

class CategoryController extends Controller
{
    private function isLoggedIn(){
//        if()
    }
    public function addcategory(){
        $categories = Category::all();
//        dd($categories);
        return view('admin.addcategory' ,['categories'=>$categories]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $laravelSessionCookie = request()->cookie('laravel_session');
        // Accessing the 'XSRF-TOKEN' cookie value
                $xsrfTokenCookie = request()->cookie('XSRF-TOKEN');

        // Using the 'session' helper to get the session data
                $laravelSessionData = session()->get('laravel_session');
                $xsrfTokenData = session()->get('XSRF-TOKEN');
        $xsrfTokenData = 'dd';
       if(isset($xsrfTokenData)){

               $file = $request->file('image');
           try {
               $category = $request->validate([
                   'title' => 'required|string',
                   'description' => 'required|string',
                   'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
               ]);

               $imageName = uniqid().'.'.$request->file('image')->getClientOriginalExtension();
               $category['imgUrl'] = 'images/category/'. $imageName;
               $imagePath = $request->file('image')->storeAs($category['imgUrl'], 'public');

                Category::create($category);
               return response()->json(['message' => 'Valid request']);
           } catch (ValidationException $e) {
               // If validation fails, handle the exception
               $errors = $e->validator->errors()->all();

               return response()->json(['error' => $errors], 400);
           }

       }else{
           return response()->json(['msg'=>'fls']);

       }



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        if($category){
            return response()->json([$category]);

        }else{
            return response()->json(['error'=>'No Category Found']);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
