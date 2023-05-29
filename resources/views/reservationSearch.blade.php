@extends('layouts.search')

@section('title', '')
@section('content')
    <form action="/hotelList" method="POST" class="reservationForm" enctype="multipart/form-data">
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
@endSection
