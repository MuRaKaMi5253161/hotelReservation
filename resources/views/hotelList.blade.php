@extends('layouts.hotelList')

@section('title', '')
@section('content')
    <form action="/hotelListSearch" method="POST" class="reservationForm" enctype="multipart/form-data">
        @csrf
        <div class="searchbox1">
            <div class="searchbox2">
                {{-- 場所検索テキストボックス --}}
                <div class="searchArea">
                    <p class="errorMessage">{{ $PurposeErrorMessage }}</p>
                    <input type="text" name="searchAreaText" class="searchAreaText" placeholder="行き先を記入してください　例) 北海道"
                        value={{ $initialDestinationName }}>
                </div>

                <div class="searchDateAndGuest">
                    <p class="errorMessage">{{ $GuestErrorMessage }}</p>
                    <p class="errorMessage">{{ $DateErrorMessage }}</p>
                    <input type="date" class="firstDate" value={{ $initialFirstDate }} name="firstDate"
                        min={{ $nowDate }}></label>
                    ～
                    <input type="date" class="lastDate" value={{ $initialLastDate }} name="lastDate"
                        min={{ $nowDate }}></label>

                    <label class="guestLavel">男性(大人)
                        <select name="adultMale" class="guest">
                            <option name="adultMale" selected>{{ $initialAdultMale }}</option>
                            <option name="adultMale">0</option>
                            <option name="adultMale">1</option>
                            <option name="adultMale">2</option>
                            <option name="adultMale">3</option>
                            <option name="adultMale">4</option>
                            <option name="adultMale">5</option>
                            <option name="adultMale">6</option>
                            <option name="adultMale">7</option>
                            <option name="adultMale">8</option>
                            <option name="adultMale">9</option>
                            <option name="adultMale">10</option>
                        </select>
                    </label>
                    <label class="guestLavel">女性(大人)
                        <select name="adultWomen" class="guest">
                            <option name="adultWomen" selected>{{ $initialAdultWomen }}</option>
                            <option name="adultWomen">0</option>
                            <option name="adultWomen">1</option>
                            <option name="adultWomen">2</option>
                            <option name="adultWomen">3</option>
                            <option name="adultWomen">4</option>
                            <option name="adultWomen">5</option>
                            <option name="adultWomen">6</option>
                            <option name="adultWomen">7</option>
                            <option name="adultWomen">8</option>
                            <option name="adultWomen">9</option>
                            <option name="adultWomen">10</option>
                        </select>
                    </label>
                    <label class="guestLavel">子供
                        <select name="child" class="guest">
                            <option name="child" selected>{{ $initialChild }}</option>
                            <option name="child">0</option>
                            <option name="child">1</option>
                            <option name="child">2</option>
                            <option name="child">3</option>
                            <option name="child">4</option>
                            <option name="child">5</option>
                            <option name="child">6</option>
                            <option name="child">7</option>
                            <option name="child">8</option>
                            <option name="child">9</option>
                            <option name="child">10</option>
                        </select>
                    </label>
                </div>
                <input type="submit" class="inputFormSubmit" name="inputFormSubmit" value="SEARCH">
            </div>
        </div>
    </form>
    @php
        $count = $hotels->count();
        
        if ($count == 0 || $errorFlag) {
            $SearchCount = '検索結果はありません';
            $hotels = [];
        } else {
            $SearchCount = '検索結果：' . $count . '件';
        }
        
    @endphp
    <p class="hotelscount">{{ $SearchCount }}</p>
    @foreach ($hotels as $hotels)
        <div class="hotelViewArea">
            <table class="hotelViewItem">
                <tr class="hotelViewItemLine">
                    <td class="hotelViewItemLineLeft">
                    </td>
                    <td class="hotelViewItemTitleAndText">
                        <div class="hotelViewItemTitleAndTextDiv">
                            <div class="hotelViewItemTitleAndText_image">
                                <img src="{{ asset($hotels->hotelImage) }}" class="hotelViewItemImg" width="100%"
                                    height="350px"></img>
                            </div>
                            <div class="hotelViewItemTitleAndText_text">
                                <p class="hotelViewItemTitle">{{ $hotels->hotelName }}</p>
                                <label>
                                    <p class="hotelViewItemBasicFee">BasicFee：{{ $hotels->basicFee }}</p>
                                </label>
                                <label>
                                    <p class="hotelViewItemCountry">Address：{{ $hotels->countryName }}</p>
                                </label>
                                <label>
                                    <p class="hotelViewItemlMail">Email：{{ $hotels->mail }}</p>
                                </label>
                                <div class="hotelDetailForm">
                                    <form action="/hotelDetail" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $hotels->id }}">
                                        <input type="submit" class="hotelViewItemSelectSubmit"
                                            name="hotelViewItemSelectSubmit" value="check">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="hotelViewItemLineLeft">
                    </td>
                </tr>
            </table>
        </div>
    @endforeach
@endsection
