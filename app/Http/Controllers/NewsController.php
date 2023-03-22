<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = News::all();
        $news = News::paginate(5);
        return view ('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::all();
        return view('news.create',compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:3|max:255',
            'article' => 'required',
            'dateTime' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasfile('image'))
        {

           foreach($request->file('image') as $image)
           {
               $nameImage =$image->getClientOriginalName();
               $image->move(public_path().'/uploads/news', $nameImage);
               $data[] = $nameImage;
           }


           $news = new News();
           $news->title = $request->title;
           $news->article = $request->article;
           $news->dateTime = $request->dateTime;
           $news->image=json_encode($data);

           $news->save();
        }






        Alert::success('Added SuccessFully');
        return redirect()->route('news.index');

    }
    // $path = 'uploads/news/';
    // $image = [];

    // if(is_array($request->file('images'))) {
    //     foreach ($request->file('images') as $image) {
    //         $images[] = $image->store($path);
    //     }
    // }
    //         $news = new News();
    //             $news->title = $request->title;
    //             $news->article = $request->article;
    //             $news->dateTime = $request->dateTime;
    //             $news->store()->createMany(['image']);
    //             $news->save();



    //             Alert::success('Added SuccessFully');

    //             return redirect()->route('news.index');

    // }


    //     $image = $request->file('image');
    //     // $image[] = $image;
    //     $slug = Str::slug($request->title);
    //     if (isset($image))
    //     {
    //         $currentDate = Carbon::now()->toDateString();
    //         $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

    //         if (!file_exists('uploads/news'))
    //         {
    //             mkdir('uploads/news',0777,true);
    //         }
    //         $image->move('uploads/news',$imagename);
    //         // $image[] = $image;
    //     }else{
    //         $imagename = "default.png";
    //     }
    //     $news = new News();
    //     $news->title = $request->title;
    //     $news->article = $request->article;
    //     $news->dateTime = $request->dateTime;
    //     $news->image = $imagename;
    //     $news->save();

    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        $images = Storage::files('/uploads/news');
        return view('news.view', compact('news','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'dateTime' => 'required',
            'image' => 'nullable|array',
            'image*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $new = News::findOrFail($id);

        // Update the post without changing the image file if the image input is empty
        if ($request->image == null) {
            $new->update([
                'title' => $request->title,
                'article' => $request->article,
                'dateTime' => $request->dateTime,
            ]);
        }
        // Otherwise, upload the new image file and update the post with the new image file
        else {
            if($request->hasfile('image'))
        {
            $image = [];

           foreach($request->file('image') as $image)
           {
               $nameImage = $image->getClientOriginalName();
               $image->move(public_path().'/uploads/news', $nameImage);
               $data[] = $nameImage;

               $new = News::find($id);

               $new->title = $request->title;
               $new->article = $request->article;
               $new->dateTime = $request->dateTime;
               $new->image=json_encode($data);


           }
           $new->save();
        }
        Alert::success('Updated Successfully');
        return redirect()->route('news.index');
        }


       Alert::success('Updated Successfully');
       return redirect()->route('news.index');

        // $this->validate($request,[
        //     'title' => 'required',
        //     'article' => 'required',
        //     'dateTime' => 'required',
        //     'image' => 'nullable|array',
        //     'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);


        // if($request->hasfile('image'))
        // {
        //     $image = [];

        //    foreach($request->file('image') as $image)
        //    {
        //        $nameImage = $image->getClientOriginalName();
        //        $image->move(public_path().'/uploads/news', $nameImage);
        //        $data[] = $nameImage;

        //        $new = News::find($id);

        //        $new->title = $request->title;
        //        $new->article = $request->article;
        //        $new->dateTime = $request->dateTime;
        //        $new->image=json_encode($data);


        //    }
        //    $new->save();
        // }
        // Alert::success('Updated Successfully');
        // return redirect()->route('news.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        if (file_exists('uploads/news/'.$news->image))
        {
            unlink('uploads/news/'.$news->image);
        }
        $news->delete();
        Alert::success('Deleted Successfully');
        return redirect()->back();
    }
}
