@extends('layouts.reservation')

@section('title', '予約情報確認')
@section('content')
@section('description')
    <p class="pageExplanation">以下の内容で予約を確定いたします</p>
@endsection
<form action="/reservationDecision" class="reservationConf" method="POST">
    @csrf

    <div class="reservationConf">
        <div class="selectDate">
            <h1>予約者氏名</h1>
            <p>名前(漢字)：{{ $customerNameText }}</p>
            <p>名前(カナ)：{{ $customerNameTextKana }}</p>
        </div>

        <div class="selectDate">
            <h1>メール</h1>
            <p>メール{{ $customerEmailText }}</p>
        </div>

        <div class="selectDate">
            <h1>住所</h1>
            <p>郵便番号：{{ $yubinbango }}</p>
            <p>都道府県：{{ $todouhuken }}</p>
            <p>市区町村：{{ $shikuchoson }}</p>
            <p>以降住所：{{ $ikoujusho }}</p>
        </div>

        <div class="selectDate">
            <h1>電話番号</h1>
            <p>電話番号：{{ $customerNumberText }}</p>
        </div>

    </div>

    <div class="reservationConf">
        <div class="selectDate">
            <h1>宿泊日</h1>
            <p>チェックイン：{{ $firstDate }}</p>
            <p>チェックアウト：{{ $lastDate }}</p>
        </div>

        <div class="inputNumber">
            <h1>人数</h1>
            <p>大人(男性)：{{ $adultMale }}</p>
            <p>大人(女性)：{{ $adultWomen }}</p>
            <p>子供：{{ $child }}</p>
        </div>

        <div class="inputDiscount">
            <h1>割引コード</h1>
            <p>割引コード：{{ $discount }}</p>
        </div>

        <div class="inputPayment">
            <h1>お支払方法</h1>
            <p>お支払方法：{{ $payment }}</p>
        </div>

        <div class="PaymentTotal">
            <h1>お支払金額</h1>
            <p>基本料金:{{ $roomFee }}</p>
            <p>消費税:{{ $tax }}</p>
            <p>割引額:{{ $discountValue }}</p>
            <p class="roomFeeInTax">合計金額:{{ $roomFeeInTaxAndDiscount }}</p>
        </div>
        <div class="inputFormSubmitBox">
            <input type="submit" name="inputFormSubmit" class="inputFormSubmit" value="確定する">
        </div>
    </div>

</form>
@endSection
