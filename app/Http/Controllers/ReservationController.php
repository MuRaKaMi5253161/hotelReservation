<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Reservation;
use App\Models\Tax;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReservationController extends Controller
{

    public function reservationSearch()
    {
        $nowDate = now()->format('Y-m-d');
        $PurposeErrorMessage = "";
        $GuestErrorMessage = "";
        $DateErrorMessage = "";
        session(['nowDate' => $nowDate]);
        return view('reservationSearch', [
            'nowDate' => $nowDate,
            'PurposeErrorMessage' => $PurposeErrorMessage,
            'GuestErrorMessage' => $GuestErrorMessage,
            'DateErrorMessage' => $DateErrorMessage
        ]);
    }

    public function reservationInput(Request $request)
    {
        // エラーメッセージ
        $DateErrorMessage = "";
        $GuestErrorMessage = "";
        $PaymentErrorMessage = "";
        $DiscountErrorMessage = "";
        $firstDate = session('firstDate');
        $lastDate = session('lastDate');
        $adultMale = session('adultMale');
        $adultWomen = session('adultWomen');
        $child = session('child');
        $roomFee = $request->get('roomFee');
        $taxRate = $request->get('tax');
        $room_info_id = $request->get('room_info_id');

        // 現在時刻を取得
        $nowDate = session('nowDate');

        // セッションに保存
        session(['roomFee' => $roomFee]);
        session(['taxRate' => $taxRate]);
        session(['room_info_id' => $room_info_id]);

        return view('reservationInput', [
            'firstDate' => $firstDate,
            'lastDate' => $lastDate,
            'adultMale' => $adultMale,
            'adultWomen' => $adultWomen,
            'child' => $child,
            'nowDate' => $nowDate,
            'roomFee' => $roomFee,
            'tax' => $taxRate,
            'DateErrorMessage' => $DateErrorMessage,
            'GuestErrorMessage' => $GuestErrorMessage,
            'PaymentErrorMessage' => $PaymentErrorMessage,
            'DiscountErrorMessage' => $DiscountErrorMessage
        ]);
    }

    public function reservationCustomerInput(Request $request)
    {

        // エラーメッセージ
        $PaymentErrorMessage = "";
        $NameErrorMessage = "";
        $EmailErrorMessage = "";
        $AddressErrorMessage = "";
        $NumberErrorMessage = "";
        $DiscountErrorMessage = "";

        // エラーフラグ
        $errorFlag = false;

        // 現在時刻を取得
        $nowDate = session('nowDate');

        // リクエスト情報を取得

        $discount = $request->get('discount');
        $payment = $request->get('payment');
        $roomFee = session('roomFee');
        $taxRate = session('taxRate');
        $tax = $roomFee * $taxRate;
        $roomFeeInTax = $roomFee + ($roomFee * $taxRate);

        session(['discount' => $discount]);
        session(['payment' => $payment]);
        session(['tax' => $tax]);
        session(['roomFeeInTax' => $roomFeeInTax]);

        // 割引コード確認チェック
        if ($discount != "") {
            $discountSuccsessFlag = false;
            $recodes = Discount::where('discountFlag', '=', 0)->pluck('discountCode');
            foreach ($recodes as $recode) {
                // 割引コードをDBの値と比較
                if ($discount == $recode) {
                    Discount::where('discountCode', '=', $recode)->update([
                        'discountFlag' => true
                    ]);
                    $discountSuccsessFlag = true;
                    $discountValue = 500;
                    session(['discountValue' => $discountValue]);
                    break;
                }
                Log::emergency($recode);
            }
            Log::emergency($recodes);
            // 割引コードが該当しない場合にエラーメッセージを設定する
            if ($discountSuccsessFlag == false) {
                $DiscountErrorMessage = "割引コードが正しくありません";
                $errorFlag = true;
            }
        } else {
            $discount = "-";
            $discountValue = 0;
            session(['discount' => $discount]);
            session(['discountValue' => $discountValue]);
        }

        if ($payment == null) {
            $PaymentErrorMessage = "入金方法を指定して下さい";
            $errorFlag = true;
        }

        // エラーの時に予約情報入力画面に戻す
        if ($errorFlag) {
            return view('reservationInput', [
                'nowDate' => $nowDate,
                'roomFee' => $roomFee,
                'tax' => $tax,
                'DiscountErrorMessage' => $DiscountErrorMessage,
                'PaymentErrorMessage' => $PaymentErrorMessage
            ]);
        }

        // お客様情報入力画面へ遷移
        return view('reservationCustomerInput', [
            'NameErrorMessage' => $NameErrorMessage,
            'EmailErrorMessage' => $EmailErrorMessage,
            'AddressErrorMessage' => $AddressErrorMessage,
            'NumberErrorMessage' => $NumberErrorMessage
        ]);
    }

    public function reservationConf(Request $request)
    {
        // エラーメッセージ
        $NameErrorMessage = "";
        $EmailErrorMessage = "";
        $AddressErrorMessage = "";
        $NumberErrorMessage = "";
        $errorFlag = false;

        //リクエスト情報を取得
        $customerNameText = $request->get('customerNameText');
        $customerNameTextKana = $request->get('customerNameTextKana');
        $customerEmailText = $request->get('customerEmailText');
        $yubinbango = $request->get('Yubinbango');
        $todouhuken = $request->get('Todouhuken');
        $shikuchoson = $request->get('shikuchoson');
        $ikoujusho = $request->get('ikoujusho');
        $customerNumberText = $request->get('customerNumberText');

        // セッションに保存する
        session(['customerNameText' => $customerNameText]);
        session(['customerNameTextKana' => $customerNameTextKana]);
        session(['customerEmailText' => $customerEmailText]);
        session(['yubinbango' => $yubinbango]);
        session(['todouhuken' => $todouhuken]);
        session(['shikuchoson' => $shikuchoson]);
        session(['ikoujusho' => $ikoujusho]);
        session(['customerNumberText' => $customerNumberText]);

        // 入力チェック
        if ($customerNameText == "" || $customerNameTextKana == "") {
            $NameErrorMessage = "名前を入力してください";
            $errorFlag = true;
        }
        if ($customerEmailText == "") {
            $EmailErrorMessage = "メールアドレスを入力してください";
            $errorFlag = true;
        }
        if ($yubinbango == "" || $todouhuken == "" || $shikuchoson == "" || $ikoujusho == "") {
            $AddressErrorMessage = "住所を入力してください";
            $errorFlag = true;
        }
        if ($customerNumberText == "") {
            $NumberErrorMessage = "電話番号を入力してください";
            $errorFlag = true;
        }

        if ($errorFlag) {
            return view('reservationCustomerInput', [
                'NameErrorMessage' => $NameErrorMessage,
                'EmailErrorMessage' => $EmailErrorMessage,
                'AddressErrorMessage' => $AddressErrorMessage,
                'NumberErrorMessage' => $NumberErrorMessage
            ]);
        }

        $firstDate = session('firstDate');
        $lastDate = session('lastDate');
        $adultMale = session('adultMale');
        $adultWomen = session('adultWomen');
        $child = session('child');
        $discount = session('discount');
        $payment = session('payment');
        $roomFee = session('roomFee');
        $tax = session('tax');
        $roomFeeInTax = session('roomFeeInTax');
        $discountValue = session('discountValue');
        $roomFeeInTaxAndDiscount = $roomFeeInTax - $discountValue;

        return view('reservationConf', [
            'customerNameText' => $customerNameText,
            'customerNameTextKana' => $customerNameTextKana,
            'customerEmailText' => $customerEmailText,
            'yubinbango' => $yubinbango,
            'todouhuken' => $todouhuken,
            'shikuchoson' => $shikuchoson,
            'ikoujusho' => $ikoujusho,
            'customerNumberText' => $customerNumberText,
            'firstDate' => $firstDate,
            'lastDate' => $lastDate,
            'adultMale' => $adultMale,
            'adultWomen' => $adultWomen,
            'child' => $child,
            'discount' => $discount,
            'payment' => $payment,
            'roomFee' => $roomFee,
            'tax' => $tax,
            'roomFeeInTax' => $roomFeeInTax,
            'discountValue' => $discountValue,
            'roomFeeInTaxAndDiscount' => $roomFeeInTaxAndDiscount
        ]);
    }

    public function reservationDecision(Request $request)
    {
        $customerNameText = session('customerNameText');
        $customerEmailText = session('customerEmailText');
        $yubinbango = session('yubinbango');
        $todouhuken = session('todouhuken');
        $shikuchoson = session('shikuchoson');
        $ikoujusho = session('ikoujusho');
        $countryName = session('countryName');
        $customerAddress = $yubinbango . $todouhuken . $shikuchoson . $ikoujusho;
        $firstDate = session('firstDate');
        $lastDate = session('lastDate');
        $room_info_id = session('room_info_id');
        $discount = session('discount');

        Reservation::insert([
            'customerName' => $customerNameText,
            'customerMail' => $customerEmailText,
            'customerAddress' => $customerAddress,
            'countryName' => $countryName,
            'firstDate' => $firstDate,
            'lastDate' => $lastDate,
            'discountCode' => $discount,
            'room_info_id' => $room_info_id,
            'paymentFlag' => false
        ]);
        return view(view: 'reservationDecision');
    }
}
