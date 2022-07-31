<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendMailable;
use App\Models\About;
use App\Models\Homeslider;
use App\Models\Category;
use App\Models\Post;
use App\Models\CategoriesPost;
use App\Models\Subscribenewsletter;
use App\Models\staff;
use App\Models\Getinvolved;
use App\Models\video;

use Session;
use DB;
use App\Quotation;
use App;
use \Cache;
class HomeController extends Controller
{

    protected $themefolder = "hamla" ;
    public function index(){

       

        if(Session::has('locale')){
                     $currentlang = App::getLocale();
                }else{
                    $locale = "ar";
                    App::setLocale($locale);
                    session()->put('locale', $locale);
                    $currentlang = $locale;
                }
        //$themefolder = 'access';
      //  $about = About::withTranslations(['ar', 'en'])->get()->where('active', "1")->first();
        $slider = Homeslider::where([['active','=', "1"],['lang','=',$currentlang]])->orderBy('created_at', 'Desc')->get();
        
        //$brands = Brand::withTranslations(['ar', 'en'])->get()->where('active', "1");
       // $gallerysales = Gallerysale::withTranslations(['ar', 'en'])->where('active', "1")->orderBy('id' , 'desc')->get();
        $news = Category::find(1);
        $postsnews = $news->posts()
                    ->where([['posts.status','=','PUBLISHED'],
                        ['posts.is_active', '1'],
                        ['posts.lang',$currentlang],
                    ])->orderBy('posts.created_at', 'Desc')
                    ->paginate(3); //$category->items

        $releases = Category::find(2);
        $postsreleases = $releases->posts()
                    ->where([['posts.status','=','PUBLISHED'],
                        ['posts.is_active', '1'],
                        ['posts.lang',$currentlang],
                    ])->orderBy('posts.created_at', 'Desc')
                    ->paginate(4); //$category->items

        $campaigns = Category::find(3);//::with('posts')->orderBy('posts.created_at')->get();
        $postscampaigns = $campaigns->posts()
                    ->where([['posts.status','=','PUBLISHED'],
                        ['posts.is_active', '1'],
                        ['posts.lang',$currentlang],
                    ])->orderBy('posts.created_at', 'Desc')
                    ->paginate(3); //$category->items

        $currentlang = app()->getLocale();


        
      
        $videos = video::get();
        
        return view($this->themefolder.'.home', compact('postsnews' ,'slider', 'postsreleases' , 'postscampaigns' ,'currentlang' , 'videos'));

    }
    public function language(){


        $currentlang = Session::get('lang');
        if($currentlang=="en")
            Session::put('lang', 'ar');
        else
            Session::put('lang', 'en');

        return back()->withInput();
    }


     public function lang($locale)
    {
        
        App::setLocale($locale);
        session()->put('locale', $locale);
       // return redirect()->back();
        return redirect('/');
    }




    public function search(Request $request){
      
        $rules = [
            'query' => 'required|min:3',
        ];

        $customMessages = [
            'query.required' => '',
            'query.min' => ''
        ];

        $this->validate($request, $rules, $customMessages);

if(Session::has('locale')){
                     $currentlang = App::getLocale();
                }else{
                    $locale = "ar";
                    App::setLocale($locale);
                    session()->put('locale', $locale);
                    $currentlang = $locale;
                }


        $query = $request->input('query');

        $posts = Post::where([['title', 'like', "%$query%"],['status','=','PUBLISHED'],['is_active','=','1'],['lang','=',$currentlang]])
            ->orWhere([['body', 'like', "%$query%"],['status','=','PUBLISHED'],['is_active','=','1'],['lang','=',$currentlang]])->paginate(9)->setPath ('');

// ->orWhere('body', 'like', "%$query%")
// ->orWhere('excerpt', 'like', "%$query%")
        $pagination = $posts->appends(array('query' =>$request->input('query')));

        return view($this->themefolder.'.search', compact('posts'));

    }



public function subscribe(Request $request){

    $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:subscribenewsletters',
        ];

        $customMessages = [
            'name.required' => 'Name field required',
            'email.required' => 'Email field required',
            'email.unique' => 'لقد قمت بالانضمام من قبل '
          
        ];

        $this->validate($request, $rules, $customMessages);

        $name = $request->input('name');
        $email = $request->input('email');
        $subscribe = new Subscribenewsletter();
        $subscribe->name = $name;
        $subscribe->email = $email;
        $subscribe->save();
        $message ="Thank you!";

session()->put('form', 'subscribe');
      //  return back()->with('success', 'Thank you!');
return redirect()->back()->with('success', 'success');

}


    public function about(){
        $about = About::withTranslations(['ar', 'en'])->orderBy('id' , 'desc')->first();
      
        $team1 = staff::withTranslations(['ar', 'en'])->where("department","option1")->get();
        $team2 = staff::withTranslations(['ar', 'en'])->where("department","option2")->get();
        $team3 = staff::withTranslations(['ar', 'en'])->where("department","option3")->get();
        

        return view($this->themefolder.'.about', compact('about' , 'team1' ,'team2' , 'team3'));
    }

public function news(){
      if(Session::has('locale')){
                     $currentlang = App::getLocale();
                }else{
                    $locale = "ar";
                    App::setLocale($locale);
                    session()->put('locale', $locale);
                    $currentlang = $locale;
                }
     $news = Category::find(1);
      $posts = $news->posts()
                    ->where([['posts.status','=','PUBLISHED'],
                        ['posts.is_active', '1'],
                        ['posts.lang',$currentlang],
                    ])->orderBy('posts.created_at', 'Desc')
                    ->paginate(9); //$category->items
        return view($this->themefolder.'.news', compact('news' , 'posts'));
}


public function releases(){
  if(Session::has('locale')){
                     $currentlang = App::getLocale();
                }else{
                    $locale = "ar";
                    App::setLocale($locale);
                    session()->put('locale', $locale);
                    $currentlang = $locale;
                }
        $releases = Category::find(2);
         $posts = $releases->posts()
                    ->where([['posts.status','=','PUBLISHED'],
                        ['posts.is_active', '1'],
                        ['posts.lang',$currentlang],
                    ])->orderBy('posts.created_at', 'Desc')
                    ->paginate(10); //$category->items
        return view($this->themefolder.'.releases', compact('releases' , 'posts'));
}


public function CAMPAIGNS(){
      if(Session::has('locale')){
                     $currentlang = App::getLocale();
                }else{
                    $locale = "ar";
                    App::setLocale($locale);
                    session()->put('locale', $locale);
                    $currentlang = $locale;
                }
        $campaigns = Category::find(3);
        $posts = $campaigns->posts()
                    ->where([['posts.status','=','PUBLISHED'],
                        ['posts.is_active', '1'],
                        ['posts.lang',$currentlang],
                    ])->orderBy('posts.created_at', 'Desc')
                    ->paginate(9); //$category->items
        return view($this->themefolder.'.attacks', compact('campaigns' , 'posts'));
}


public function shareus()
{
   $getinvolved = Getinvolved::withTranslations(['ar', 'en'])->orderBy('id' , 'desc')->first();

     $additionals_images = array();

            if($getinvolved!=null){
                if(!empty($getinvolved->images)){
                    //$getinvolved->images = ltrim($getinvolved->images,'["');
                    $getinvolved->images = str_replace('"','',$getinvolved->images);
                    $getinvolved->images = str_replace('[','',$getinvolved->images);
                    $getinvolved->images = str_replace(']','',$getinvolved->images);

                   // $getinvolved->images = rtrim($getinvolved->images,']');
                    $additionals_images = explode(',', $getinvolved->images);
                }
            }

        return view($this->themefolder.'.getinvolved', compact('getinvolved','additionals_images'));
}

public function tabaraa()
{
        return view($this->themefolder.'.donate');
}


public function tags($cat_id , $slug){

if(Session::has('locale')){
                     $currentlang = App::getLocale();
                }else{
                    $locale = "ar";
                    App::setLocale($locale);
                    session()->put('locale', $locale);
                    $currentlang = $locale;
                }

        $query = $slug;

        $posts = Post::where([['title', 'like', "%$query%"],['status','=','PUBLISHED'],['is_active','=','1'],['lang','=', $currentlang]])
            ->orWhere('excerpt', 'like', "%$query%")
            ->orWhere('body', 'like', "%$query%")
            ->paginate(9);
        return view($this->themefolder.'.tags', compact('posts' ,'slug'));
}

public function post($y ,$m , $d, $slug){
      if(Session::has('locale')){
                     $currentlang = App::getLocale();
                }else{
                    $locale = "ar";
                    App::setLocale($locale);
                    session()->put('locale', $locale);
                    $currentlang = $locale;
                }
   $post = Post::where([['slug',$slug],['status','=','PUBLISHED'],['is_active', '1'],['lang', $currentlang]])->orderBy('id', 'Desc')->first();

   if($post==null)
    $post = Post::where([['slug',$slug],['status','=','PUBLISHED'],['is_active', '1']])->orderBy('id', 'Desc')->first();
/*
if($post == null){
      $post = Post::where([['slug',URLencode($slug)],['is_active', '1'],['lang', $currentlang]])->orderBy('id', 'Desc')->first();
}
*/


 $relatedposts  = array();
 $temp  = array();
 $tags  = array();

if($post != null){
    App::setLocale($post->lang);
        session()->put('locale', $post->lang);

$poststitle = explode(" ",$post->title);
    

    $tags =  $poststitle;
    for ($i=0; $i <count($tags ) ; $i++) { 
         $tags[$i] =  str_replace("/","", $tags[$i] );
       $tags[$i] =  str_replace("\'","", $tags[$i] );
        $tags[$i] =  str_replace(":","", $tags[$i] );
       $tags[$i] =  str_replace(",","", $tags[$i] );
       $tags[$i] =  str_replace('"',"", $tags[$i] );
       $tags[$i] =  str_replace("?","", $tags[$i] );
       $tags[$i] =  str_replace("؟","", $tags[$i] );
    }

    $latestpostid = 0;
   
    foreach ($poststitle as $ptitle) {
     

    $relatedpost = Post::where([['title', 'like', "%$ptitle%"],['status','=','PUBLISHED'],['is_active','=','1'],['lang','=',$post->lang]])
            ->orWhere('excerpt', 'like', "%$ptitle%")
            ->orWhere('body', 'like', "%$ptitle%")
            ->paginate(2);


            if($relatedpost[1]!=null){
                
                if(array_search($relatedpost[1]['id'],$temp) == false){
                    $temp[$relatedpost[1]['id']] = $relatedpost[1]['id'];
                    $relatedposts[] = $relatedpost[1];
                }
        }
        if(count($relatedposts) > 2)
            break;
        }

        

$cat_id = $post->categories()->first()->id;

    if($cat_id == 3){
        return view($this->themefolder.'.articleattacks', compact('post' , 'relatedposts' , 'tags'));
    }else{
        if($cat_id  == 2){
        return view($this->themefolder.'.articlereleases', compact('post' , 'relatedposts' , 'tags'));
    }else
        return view($this->themefolder.'.articlenews', compact('post' , 'relatedposts' ,'tags' ));
    }
    }else{

    }

}


}
