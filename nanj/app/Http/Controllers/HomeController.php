<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Carbon\Carbon;
use App\Wallet;
use Validator;
use App\Poem;
use LVR\IP\PublicAddress;

class HomeController extends Controller
{
    /**
     * 初期表示
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index (Request $request) {


        if ($request->isMethod('post')) {
            $request->merge(['ip' => \Request::ip()]);
            $validator = Validator::make($request->all(),
                [
                    'email' => 'required|email|max:64|unique:wallets',
                    'address' => 'required|size:42|unique:wallets',
                    'ip' => 'required|unique:wallets',
                ]
            );
            if ($validator->fails()) {
                return redirect('/#airdrop')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                $wallets = new Wallet();
                $wallets->email = $request->email;
                $wallets->address = $request->address;
                $wallets->ip = $request->ip;

                $wallets->save();

                return redirect('/thanks');
            }
        }
        $view['isShowCountDown'] = $this->dateCheck('2018-3-16 21:00:00');
        $view['isShowAirDrop'] = $this->dateCheck('2018-3-10 23:59:59');

        return view('welcome', $view);
    }

    /**
     * 日付確認
     *
     * @param $targetDate
     *
     * @return int
     */
    private function dateCheck($targetDate) {
        $dt = new Carbon('Asia/tokyo');
        $targetTime = new Carbon($targetDate);
        return $dt->gte($targetTime) ? 0 : 1;
    }

    /**
     * 川柳の表示
     */
    public function poem() {
        $members = Poem::all();   // Eloquent"Member"で全データ取得
        return view('poem', ["members" => $members]);

    }


}
