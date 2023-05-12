@extends('layouts.reservation')

@section('title', '予約情報入力')
@section('content')
@section('description')
    <p class="pageExplanation">ホテルの予約情報を入力してください</p>
@endsection
<form action="/reservationCustomerInput" method="POST" class="reservationForm">
    @csrf
    <div class="selectDateBox">
        <h1 class="itemTitle">宿泊日</h1>
        <p class="forDate">チェックイン：{{ $firstDate }}</p>
        <p class="forDate">チェックアウト：{{ $lastDate }}</p>
    </div>

    <div class="inputNumberBox">
        <h1 class="itemTitle">人数</h1>
        <p class="adultMaleNumber">大人(男性)：{{ $adultMale }}</p>
        <p class="adultWomanNumber">大人(女性)：{{ $adultWomen }}</p>
        <p class="childNumber">子供：{{ $child }}</p>
    </div>

    <div class="roomFeeOneDay">
        <h1 class="roomFeeTitle">料金</h1>
        <h1 class="roomFeeValue">{{ $roomFee }}円</h1>
    </div>

    <div class="inputPaymentBox">
        <h1 class="itemTitle">お支払方法</h1>
        <ul>
            <li><input type="radio" name="payment" value="現金">現金</li>
            <li><input type="radio" name="payment" value="コンビニ払い">コンビニ払い</li>
            <li><input type="radio" name="payment" value="銀行払い">銀行払い</li>
        </ul>
        <p class="errorMessage">{{ $PaymentErrorMessage }}</p>
    </div>

    <div class="inputDiscountBox">
        <h1 class="itemTitle">割引コード</h1>
        <input type="text" class="inputDiscountText" name="discount" placeholder="割引コードを入力してください" maxlength="8">
        <p class="errorMessage">{{ $DiscountErrorMessage }}</p>
    </div>

    <div class="inputFormSubmitBox">
        <input type="submit" class="inputFormSubmit" name="inputFormSubmit" value="確認画面へ">
    </div>

</form>
@endSection
