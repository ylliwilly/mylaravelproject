<?php

namespace App\Http\Controllers;

// use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
// use App;
// use Controller;
use Agent;



class WebController extends Controller
{
    public function jump_Introduction(Request $request)
    {
        return view('introduction');
    }
    public function jump_Home(Request $request)
    {
        return view('home');
    }
    public function jump_About_us(Request $request)
    {
        return view('about_us');
    }
    public function jump_Collections(Request $request)
    {
        return view('collections');
    }
    public function jump_Comic(Request $request)
    {
        // 取得使用者的作業系統和瀏覽器
        $os = Agent::platform();
        $browser = Agent::browser();

        if (Agent::isDesktop()) {
            $device = 'Desktop';
            return view('comic', compact('device', 'os', 'browser'));
        } elseif (Agent::isTablet()) {
            $device = 'Tablet';
            return view('comic', compact('device', 'os', 'browser'));
        } elseif (Agent::isMobile()) {
            $device = 'Mobile';
            return view('comic_phone', compact('device', 'os', 'browser'));
        }
        
    }

    public function jump_Collections_gallery(Request $request)
    {
        return view('collection_gallery');
    }
    public function jump_Sales(Request $request)
    {
        return view('sales');
    }
    public function jump_Commodity_Case(Request $request)
    {
        return view('commodity_case');
    }
    public function jump_Commodity_Sales(Request $request)
    {
        return view('commodity_sales');
    }
    public function jump_Commodity_Sticker(Request $request)
    {
        return view('commodity_sticker');
    }


    public function works(Request $request)
    {
        return view('works');
    }
    public function jump_Alikoi(Request $request)
    {
        return view('Alikoi_gallery');
    }

    public function jump_Register(Request $request)
    {
        return view('register');
    }
    
   
}
