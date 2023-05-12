@extends('layouts.reservation')

@section('title', 'お客様情報入力')
@section('content')
@section('description')
    <p class="pageExplanation">お客様の情報を入力してください</p>
@endsection
<form action="/reservationConf" method="POST" class="reservationForm">
    @csrf
    <div class="customerName">
        <h1 class="customerNameTitle">予約者氏名</h1>
        <label class="customerNameLabel">名前(漢字)：<input type="text" class="customerNameText"
                name="customerNameText"></label>
        <label class="customerNameLabel">名前(カナ)：<input type="text" class="customerNameText"
                name="customerNameTextKana"></label>
        <p class="errorMessage">{{ $NameErrorMessage }}</p>
    </div>

    <div class="customerEmail">
        <h1 class="customerEmailTitle">メール</h1>
        <label class="customerEmailLabel">メール：<input type="mail" class="customerEmailText"
                name="customerEmailText"></label>
        <p class="errorMessage">{{ $EmailErrorMessage }}</p>
    </div>

    <div class="customerAddress">
        <h1 class="customerAddressTitle">住所</h1>
        <label class="customerAddressLabel">郵便番号：<input type="text" class="customerAddressText"
                name="Yubinbango"></label><br />
        <label class="customerAddressLabel">都道府県：<input type="text" class="customerAddressText"
                name="Todouhuken"></label><br />
        <label class="customerAddressLabel">市区町村：<input type="text" class="customerAddressText"
                name="shikuchoson"></label><br />
        <label class="customerAddressLabel">以降住所：<input type="text" class="customerAddressText"
                name="ikoujusho"></label>
        <p class="errorMessage">{{ $AddressErrorMessage }}</p>
    </div>

    <div class="customerNumber">
        <h1 class="customerNumberTitle">電話番号</h1>
        <label class="customerNumberLabel">電話番号：<input type="text" class="customerNumberText"
                name="customerNumberText"></label>
        <p class="errorMessage">{{ $NumberErrorMessage }}</p>

    </div>

    <div class="inputFormSubmitBox">
        <input type="submit" class="inputFormSubmit" name="inputFormSubmit" value="確認画面へ">
    </div>

</form>
@endSection
