<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use DB;
use Str;
use App\Models\Review;
class HomePageController extends Controller
{
    public function index()
    {
        $sliders=DB::table('slider')->where('status',1)->where('type',0)->get();
        $links=DB::table('slider')->where('status',1)->where('type',1)->where('is_pin',0)->get();
        $link_pins=DB::table('slider')->where('status',1)->where('type',1)->where('is_pin',1)->get();
        $blogs=DB::table('news')->where('news_status',1)->where('is_pin',0)->get();
        $blog_pins=DB::table('news')->where('news_status',1)->where('is_pin',1)->get();
        $clients=DB::table('client')->where('status',1)->get();
        return view('frontend.index',compact('sliders','links','blogs','clients','link_pins','blog_pins'));
    }
    public function faq()
    {
        $content=DB::table('page_contain')->where('id',2)->first();
        $faqs=DB::table('faq')->where('status',1)->get();
        return view('frontend.faq',compact('faqs','content'));
    }
    public function about()
    { 
        $content=DB::table('page_contain')->where('id',3)->first();
        return view('frontend.about',compact('content'));
    }
    public function contact()
    { 
        $content=DB::table('page_contain')->where('id',2)->first();
        return view('frontend.contact',compact('content'));
    }
    public function news()
    { 
        $content=DB::table('page_contain')->where('id',5)->first();
        $newses=DB::table('news')->where('news_status',1)->paginate(9);
        return view('frontend.news',compact('newses','content'));
    }
    public function news_cat($name)
    { 
        $content=DB::table('page_contain')->where('id',5)->first();
        $newses=DB::table('news')->where('news_status',1)->where('news_category',$name)->paginate(9);
        return view('frontend.news',compact('newses','content'));
    }
    public function blog($slug)
    { 
        
        $blogs=DB::table('blogs')->where('blog_status',1)->get();
        $blog=DB::table('blogs')->where('blog_slug',$slug)->first();
        $comments=Review::where('blog_id',$blog->blog_id)->with('reply')->get();
        return view('frontend.blog-post',compact('blog','blogs','comments'));
    }
    public function all_blog()
    { 
        $content=DB::table('page_contain')->where('id',4)->first();
        $blogs=DB::table('blogs')->where('blog_status',1)->paginate(10);
        return view('frontend.blog',compact('blogs','content'));
    }
    public function blog_cat($name)
    { 
       
        $blogs=DB::table('blogs')->where('blog_status',1)->where('blog_category',$name)->get();
        $content=DB::table('page_contain')->where('id',4)->first();
        return view('frontend.blog',compact('blogs','content'));
    }
    public function news_post($slug)
    { 
        $categories=DB::table('news_categories')->get();
        $newses=DB::table('news')->where('news_status',1)->get();
        $news=DB::table('news')->where('news_slug',$slug)->first();
        return view('frontend.news-post',compact('news','newses','categories'));
    }
    public function Spelansvar()
    { 
        $spela=DB::table('page_contain')->where('id',1)->first();
        return view('frontend.spelansvar',compact('spela'));
    }
    public function Poolspel()
    { 
        $pools=DB::table('poolspel')->where('status',1)->orderBy('position','asc')->get();
        return view('frontend.poolspel',compact('pools'));
    }
    public function table()
    { 
        $content=DB::table('page_contain')->where('id',6)->first();
        $tables=DB::table('game_table')->where('status',1)->get();
        return view('frontend.table',compact('tables','content'));
    }
    public function Tipspel()
    { 
        $content=DB::table('page_contain')->where('id',8)->first();
        $tipspels=DB::table('tipspel')->where('status',1)->get();
        return view('frontend.speltruppen',compact('tipspels','content'));
    }
    public function Tipspel_details($id)
    { 
        $content=DB::table('page_contain')->where('id',8)->first();
        $tipspel=DB::table('tipspel')->where('id',$id)->first();
        return view('frontend.tipstar_details',compact('tipspel','content'));
    }
    public function Andelar()
    { 
        $content=DB::table('page_contain')->where('id',9)->first();
        $andelars=DB::table('andelar')->where('status',1)->orderBy('position','asc')->get();
        return view('frontend.andelar',compact('andelars','content'));
    }
    public function Speltip()
    { 
        $categories=DB::table('category')->get();
        $content=DB::table('page_contain')->where('id',7)->first();
        $speltips=DB::table('speltip')->where('status',1)->get();
        $matchs=DB::table('match_events')->where('type','pooltip')->where('status',1)->paginate(15);
        $matchspel=DB::table('match_events')->where('type','speltip')->where('status',1)->get();
        $adss=DB::table('ads')->where('status',1)->get();
        return view('frontend.spletips',compact('speltips','adss','content','matchs','categories','matchspel'));
    }
    public function match_event($slug)
    { 
        $client = new Client();
            
        $response = $client->get('https://api.www.svenskaspel.se/external/1/draw/topptipset/draws/?accesskey=f0ed62f5-89e9-4f49-a5be-3f108fc9f455');
        $data = json_decode($response->getBody()->getContents(), true);
        $data=$data['draws'][0]['events'];
        $content=DB::table('page_contain')->where('id',7)->first();
        $match=DB::table('match_events')->where('slug',$slug)->first();
        return view('frontend.match-event',compact('content','match','data'));
    }
    public function speltip_cat($id)
    { 
        $categories=DB::table('category')->get();
        $content=DB::table('page_contain')->where('id',7)->first();
        $speltips=DB::table('speltip')->where('status',1)->get();
        $matchs=DB::table('match_events')->where('type','pooltip')->where('status',1)->get();
        $matchspel=DB::table('match_events')->where('type','speltip')->where('category_id',$id)->where('status',1)->get();
        $adss=DB::table('ads')->where('status',1)->get();
        return view('frontend.spletips',compact('speltips','adss','content','matchs','categories','matchspel'));
    }
    public function Red()
    { 
        $client = new Client();
        $pools=DB::table('poolspel')->where('status',1)->get();
        $content=DB::table('page_contain')->where('id',9)->first();
        $response = $client->get('https://api.www.svenskaspel.se/external/1/draw/topptipset/draws/?accesskey=f0ed62f5-89e9-4f49-a5be-3f108fc9f455');
        $data = json_decode($response->getBody()->getContents(), true);
        $data=$data['draws'][0]['events'];
        $andelars=DB::table('andelar')->where('status',1)->get();
        return view('frontend.reduce',compact('content','pools','data','andelars'));
    }
    public function Villkor()
    { 
        $spela=DB::table('page_contain')->where('id',10)->first();
        return view('frontend.spelansvar',compact('spela'));
    }
    public function Spelregler()
    { 
        $spela=DB::table('page_contain')->where('id',11)->first();
        return view('frontend.spelansvar',compact('spela'));
    }
    public function Integritetspolicy()
    { 
        $spela=DB::table('page_contain')->where('id',12)->first();
        return view('frontend.spelansvar',compact('spela'));
    }
    public function Cookie ()
    { 
        $spela=DB::table('page_contain')->where('id',13)->first();
        return view('frontend.spelansvar',compact('spela'));
    }
    public function Spelmissbruk()
    { 
        $spela=DB::table('page_contain')->where('id',14)->first();
        return view('frontend.spelansvar',compact('spela'));
    }
    public function speltips_g()
    { 
        $matchspel=DB::table('speltip_new')->where('status',1)->paginate(10);
        return view('frontend.speltips-g',compact('matchspel'));
    }
    public function speltips_details($id)
    { 
        $content=DB::table('page_contain')->where('id',7)->first();
        $matchspel=DB::table('speltip_new')->where('status',1)->get();
        $match=DB::table('speltip_new')->where('id',$id)->first();
        return view('frontend.speltip-details',compact('match','matchspel','content'));
    }
}
