<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room_info;
use App\Models\Tax;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function hotelInfoPost(Request $request)
    {
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
        }

        if ($errorFlag) {
            return view('reservationSearch', [
                'PurposeErrorMessage' => $PurposeErrorMessage,
                'DateErrorMessage' => $DateErrorMessage,
                'GuestErrorMessage' => $GuestErrorMessage,
                'errorFlag' => $errorFlag,
                'nowDate' => $nowDate
            ]);
        }


        $hotels = Country::join('hotels', 'hotels.country_id', 'country.id')
            ->where('countryName', 'LIKE', "%{$countryName}%")->get();
        return view(
            'hotelList',
            ['hotels' => $hotels],
            [
                'PurposeErrorMessage' => $PurposeErrorMessage,
                'DateErrorMessage' => $DateErrorMessage,
                'GuestErrorMessage' => $GuestErrorMessage,
                'errorFlag' => $errorFlag,
                'nowDate' => $nowDate
            ]
        );
    }

    public function hotelListSearch(Request $request)
    {
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

        session(['firstDate' => $firstDate]);
        session(['lastDate' => $lastDate]);
        session(['adultMale' => $adultMale]);
        session(['adultWomen' => $adultWomen]);
        session(['child' => $child]);

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
        }

        if ($errorFlag) {
            return view('hotelList', [
                'hotels' => $hotels,
                'errorFlag' => $errorFlag,
                'PurposeErrorMessage' => $PurposeErrorMessage,
                'DateErrorMessage' => $DateErrorMessage,
                'GuestErrorMessage' => $GuestErrorMessage,
                'nowDate' => $nowDate
            ]);
        }

        return view(
            'hotelList',
            ['hotels' => $hotels],
            [
                'errorFlag' => $errorFlag,
                'PurposeErrorMessage' => $PurposeErrorMessage,
                'DateErrorMessage' => $DateErrorMessage,
                'GuestErrorMessage' => $GuestErrorMessage,
                'nowDate' => $nowDate
            ]
        );
    }


    public function hotelDetailPost(Request $request)
    {
        $ButtonDisplayFlag = true;
        $hotelId = $request->id;
        $firstDate = session('firstDate');
        $lastDate = session('lastDate');
        $room_info = Tax::join('room_info', 'room_info.tax_id', 'tax.id')
            ->where('hotel_id', '=', (int)$hotelId)->get();
        $reservation = Reservation::where([
            ['firstDate', '<=', $firstDate],
            ['lastDate', '>=', $lastDate]
        ])->get();
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
