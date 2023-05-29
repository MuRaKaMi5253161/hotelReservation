<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Reservation;
use App\Models\Tax;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /// ホテルリスト画面
    public function hotelInfoPost(Request $request)
    {
        // 初期値設定
        $GuestErrorMessage = "";
        $DateErrorMessage = "";
        $PurposeErrorMessage = "";
        $errorFlag = false;
        $countryName = $request->get('searchAreaText');
        $firstDate = $request->get('firstDate');
        $lastDate = $request->get('lastDate');
        $adultMale = $request->get('adultMale');
        $adultWomen = $request->get('adultWomen');
        $child = $request->get('child');
        $nowDate = session('nowDate');
        $tomorrowDate = now()->addDay(1)->format('Y-m-d');
        $initialFirstDate = $nowDate;
        $initialLastDate = $tomorrowDate;

        // セッションに値を格納
        session(['countryName' => $countryName]);
        session(['firstDate' => $firstDate]);
        session(['lastDate' => $lastDate]);
        session(['adultMale' => $adultMale]);
        session(['adultWomen' => $adultWomen]);
        session(['child' => $child]);

        // 入力チェック
        if ($countryName == "") {
            $PurposeErrorMessage = "目的地を入力してください";
            $errorFlag = true;
        }
        if ($adultMale == 0 && $adultWomen == 0) {
            $GuestErrorMessage = "人数を入力してください(大人は1人以上指定してください)";
            $errorFlag = true;
        }
        if ($firstDate == null || $lastDate == null) {
            $DateErrorMessage = "日付を入力してください";
            $errorFlag = true;
        } else if ($firstDate > $lastDate) {
            $DateErrorMessage = "チェックアウトはチェックインより後の日付を入力してください";
            $errorFlag = true;
        }

        // エラー時にホテル検索画面に遷移
        if ($errorFlag) {
            return view('reservationSearch', [
                'PurposeErrorMessage' => $PurposeErrorMessage,
                'DateErrorMessage' => $DateErrorMessage,
                'GuestErrorMessage' => $GuestErrorMessage,
                'initialDestinationName' => $countryName,
                'initialAdultMale' => $adultMale,
                'initialAdultWomen' => $adultWomen,
                'initialChild' => $child,
                'initialFirstDate' => $firstDate,
                'initialLastDate' => $lastDate,
                'errorFlag' => $errorFlag,
                'nowDate' => $nowDate
            ]);
        }

        // 条件に合ったホテルの情報を取得
        $hotels = Country::join('hotels', 'hotels.country_id', 'country.id')
            ->where('countryName', 'LIKE', "%{$countryName}%")->get();

        // ホテルリスト画面に遷移
        return view(
            'hotelList',
            ['hotels' => $hotels],
            [
                'initialDestinationName' => "",
                'initialFirstDate' => $initialFirstDate,
                'initialLastDate' => $initialLastDate,
                'initialAdultMale' => 0,
                'initialAdultWomen' => 0,
                'initialChild' => 0,
                'PurposeErrorMessage' => $PurposeErrorMessage,
                'DateErrorMessage' => $DateErrorMessage,
                'GuestErrorMessage' => $GuestErrorMessage,
                'errorFlag' => $errorFlag,
                'nowDate' => $nowDate
            ]
        );
    }

    /// ホテルリスト画面の検索機能
    public function hotelListSearch(Request $request)
    {
        // 初期値設定
        $GuestErrorMessage = "";
        $DateErrorMessage = "";
        $PurposeErrorMessage = "";
        $errorFlag = false;
        $countryName = $request->get('searchAreaText');
        $firstDate = $request->get('firstDate');
        $lastDate = $request->get('lastDate');
        $adultMale = $request->get('adultMale');
        $adultWomen = $request->get('adultWomen');
        $child = $request->get('child');
        $nowDate = session('nowDate');
        $tomorrowDate = now()->addDay(1)->format('Y-m-d');
        $initialFirstDate = $nowDate;
        $initialLastDate = $tomorrowDate;

        // セッションに格納
        session(['firstDate' => $firstDate]);
        session(['lastDate' => $lastDate]);
        session(['adultMale' => $adultMale]);
        session(['adultWomen' => $adultWomen]);
        session(['child' => $child]);

        // 検索条件に合ったホテルの情報を取得
        $hotels = Country::join('hotels', 'hotels.country_id', 'country.id')
            ->where('countryName', 'LIKE', "%{$countryName}%")->get();

        // 入力チェック
        if ($countryName == "") {
            $PurposeErrorMessage = "目的地を入力してください";
            $errorFlag = true;
        }
        if ($adultMale == 0 && $adultWomen == 0) {
            $GuestErrorMessage = "人数を入力してください(大人は1人以上指定してください)";
            $errorFlag = true;
        }
        if ($firstDate == null || $lastDate == null) {
            $DateErrorMessage = "日付を入力してください";
            $errorFlag = true;
        } else if ($firstDate > $lastDate) {
            $DateErrorMessage = "チェックアウトはチェックインより後の日付を入力してください";
            $errorFlag = true;
        }

        // エラー時にホテルリスト画面に遷移
        if ($errorFlag) {
            return view('hotelList', [
                'initialDestinationName' => $countryName,
                'initialFirstDate' => $firstDate,
                'initialLastDate' => $lastDate,
                'initialAdultMale' => $adultMale,
                'initialAdultWomen' => $adultWomen,
                'initialChild' => $child,
                'hotels' => $hotels,
                'errorFlag' => $errorFlag,
                'PurposeErrorMessage' => $PurposeErrorMessage,
                'DateErrorMessage' => $DateErrorMessage,
                'GuestErrorMessage' => $GuestErrorMessage,
                'nowDate' => $nowDate
            ]);
        }

        // ホテルリスト画面に遷移
        return view(
            'hotelList',
            ['hotels' => $hotels],
            [
                'initialDestinationName' => "",
                'initialFirstDate' => $initialFirstDate,
                'initialLastDate' => $initialLastDate,
                'initialAdultMale' => 0,
                'initialAdultWomen' => 0,
                'initialChild' => 0,
                'errorFlag' => $errorFlag,
                'PurposeErrorMessage' => $PurposeErrorMessage,
                'DateErrorMessage' => $DateErrorMessage,
                'GuestErrorMessage' => $GuestErrorMessage,
                'nowDate' => $nowDate
            ]
        );
    }

    /// ルームリスト画面
    public function hotelDetailPost(Request $request)
    {
        // 初期値設定
        $ButtonDisplayFlag = true;
        $hotelId = $request->id;
        $firstDate = session('firstDate');
        $lastDate = session('lastDate');

        // ルーム情報を取得
        $room_info = Tax::join('room_fee', 'room_fee.tax_id', '=', 'tax.id')
            ->rightJoin('room_info', 'room_fee.room_info_id', 'room_info.id')
            ->where([
                ['hotel_id', '=', (int)$hotelId],
                ['expiryFromDate', '<=', $firstDate],
                ['expiryToDate', '>=', $firstDate]
            ])->get();

        // 予約情報を取得(残ルーム数表示用)
        $reservation = Reservation::where([
            ['firstDate', '<=', $firstDate],
            ['lastDate', '>=', $lastDate]
        ])->get();

        // ルームリスト画面に遷移
        return view(
            'hotelDetail',
            ['room_info' => $room_info],
            ['reservation' => $reservation],
            [
                'firstDate' => $firstDate,
                'lastDate' => $lastDate,
                'ButtonDisplayFlag' => $ButtonDisplayFlag
            ]
        );
    }
}
