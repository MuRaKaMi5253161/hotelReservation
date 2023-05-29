<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Reservation;
use App\Mail\BookingDoneMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ReservationController extends Controller
{
    /// ホテル検索画面
    public function reservationSearch()
    {
        // 初期値設定
        $PurposeErrorMessage = "";
        $GuestErrorMessage = "";
        $DateErrorMessage = "";

        // 現在日次と翌日の日時を取得
        $nowDate = now()->format('Y-m-d');
        $tomorrowDate = now()->addDay(1)->format('Y-m-d');
        $initialFirstDate = $nowDate;
        $initialLastDate = $tomorrowDate;

        // セッションに値を格納
        session(['nowDate' => $nowDate]);

        // ホテル検索画面に遷移
        return view('reservationSearch', [
            'initialDestinationName' => "",
            'initialFirstDate' => $initialFirstDate,
            'initialLastDate' => $initialLastDate,
            'initialAdultMale' => 0,
            'initialAdultWomen' => 0,
            'initialChild' => 0,
            'nowDate' => $nowDate,
            'PurposeErrorMessage' => $PurposeErrorMessage,
            'GuestErrorMessage' => $GuestErrorMessage,
            'DateErrorMessage' => $DateErrorMessage
        ]);
    }

    // 予約情報入力画面
    public function reservationInput(Request $request)
    {
        // 初期値設定
        $DateErrorMessage = "";
        $GuestErrorMessage = "";
        $PaymentErrorMessage = "";
        $DiscountErrorMessage = "";

        // リクエスト情報取得
        $roomFee = $request->get('roomFee');
        $taxRate = $request->get('tax');
        $room_info_id = $request->get('room_info_id');

        // セッション情報取得
        $firstDate = session('firstDate');
        $lastDate = session('lastDate');
        $adultMale = session('adultMale');
        $adultWomen = session('adultWomen');
        $child = session('child');

        // 現在時刻を取得
        $nowDate = session('nowDate');

        // セッションに保存
        session(['roomFee' => $roomFee]);
        session(['taxRate' => $taxRate]);
        session(['room_info_id' => $room_info_id]);

        // 予約情報入力画面に遷移
        return view('reservationInput', [
            'firstDate' => $firstDate,
            'lastDate' => $lastDate,
            'adultMale' => $adultMale,
            'adultWomen' => $adultWomen,
            'child' => $child,
            'nowDate' => $nowDate,
            'roomFee' => $roomFee,
            'tax' => $taxRate,
            'initialDiscount' => "",
            'DateErrorMessage' => $DateErrorMessage,
            'GuestErrorMessage' => $GuestErrorMessage,
            'PaymentErrorMessage' => $PaymentErrorMessage,
            'DiscountErrorMessage' => $DiscountErrorMessage
        ]);
    }

    /// お客様情報取得画面
    public function reservationCustomerInput(Request $request)
    {

        // 初期値設定
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

        // セッション情報を取得
        $roomFee = session('roomFee');
        $taxRate = session('taxRate');
        $firstDate = session('firstDate');
        $lastDate = session('lastDate');
        $adultMale = session('adultMale');
        $adultWomen = session('adultWomen');
        $child = session('child');

        // 消費税と税込み価格を計算
        $tax = $roomFee * $taxRate;
        $roomFeeInTax = $roomFee + ($roomFee * $taxRate);

        // セッションに値を格納
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
            $absentDiscount = '-';
            $discountValue = 0;
            // セッションに値を格納
            session(['discount' => $absentDiscount]);
            session(['discountValue' => $discountValue]);
        }

        // 入金方法確認
        if ($payment == null) {
            $PaymentErrorMessage = "入金方法を指定して下さい";
            $errorFlag = true;
        }

        // エラーの時に予約情報入力画面に戻す
        if ($errorFlag) {
            return view('reservationInput', [
                'nowDate' => $nowDate,
                'roomFee' => $roomFee,
                'firstDate' => $firstDate,
                'lastDate' => $lastDate,
                'tax' => $tax,
                'adultMale' => $adultMale,
                'adultWomen' => $adultWomen,
                'child' => $child,
                'initialDiscount' => $discount,
                'DiscountErrorMessage' => $DiscountErrorMessage,
                'PaymentErrorMessage' => $PaymentErrorMessage
            ]);
        }

        // お客様情報入力画面へ遷移
        return view('reservationCustomerInput', [
            'NameErrorMessage' => $NameErrorMessage,
            'EmailErrorMessage' => $EmailErrorMessage,
            'AddressErrorMessage' => $AddressErrorMessage,
            'NumberErrorMessage' => $NumberErrorMessage,
            'initialCustomerNameText' => "",
            'initialCustomerNameTextKana' => "",
            'initialEmail' => "",
            'initialAddressYubinbango' => "",
            'initialAddressTodouhuken' => "",
            'initialAddressshikutyoson' => "",
            'initialAddressikoujusho' => "",
            'initialTelNumber' => ""
        ]);
    }

    /// 予約情報確認画面
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
        } else if (!preg_match("/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/", $customerEmailText)) {
            $EmailErrorMessage = "メールアドレスは[～@～.～]の形式で入力してください";
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

        // エラーの時にお客様情報入力画面に戻す
        if ($errorFlag) {
            return view('reservationCustomerInput', [
                'NameErrorMessage' => $NameErrorMessage,
                'EmailErrorMessage' => $EmailErrorMessage,
                'AddressErrorMessage' => $AddressErrorMessage,
                'NumberErrorMessage' => $NumberErrorMessage,
                'customerNameText' => $customerNameText,
                'initialCustomerNameText' => $customerNameText,
                'initialCustomerNameTextKana' => $customerNameTextKana,
                'initialEmail' => $customerEmailText,
                'initialAddressYubinbango' => $yubinbango,
                'initialAddressTodouhuken' => $todouhuken,
                'initialAddressshikutyoson' => $shikuchoson,
                'initialAddressikoujusho' => $ikoujusho,
                'initialTelNumber' => $customerNumberText
            ]);
        }

        // セッションから値を取得
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

        /// 予約情報確認画面に遷移
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

    // 予約完了画面
    public function reservationDecision(Request $request)
    {
        $sendEmailCheck = $request->get('sendEmailCheck');
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

        // 予約情報をDBに追加
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

        // 予約完了メール送信チェックボックスにチェックしていた場合にメールを送信する
        if ($sendEmailCheck) {
            // 送信先や名前をセット
            $customerEmail = $customerEmailText;
            $customerName = $customerNameText . '様';
            $to = [
                [
                    'email' => $customerEmail,
                    'name' => $customerName,
                ]
            ];
            // メール送信処理
            Mail::to($to)->send(new BookingDoneMail($customerEmail, $customerName));
        }

        // 予約完了画面に遷移
        return view(view: 'reservationDecision');
    }
}
