@extends('layouts.hotelList')

@section('title', '')
@section('content')
    @foreach ($room_info as $room)
        @php
            $ButtonDisplayFlag = true;
            $resvationCount = 0;
            $room_info_id = $room->id;
            $room_roomCount = $room->roomCount;
            $remainingError = '';
            
            foreach ($reservation as $res) {
                $res_room_info_id = $res->room_info_id;
            
                if ($room_info_id == $res_room_info_id) {
                    ++$resvationCount;
                }
            }
            
            $roomCount = $room_roomCount - $resvationCount;
            if ($roomCount <= 0) {
                $ButtonDisplayFlag = false;
                $remainingError = '満室のため予約できません';
            }
        @endphp
        <div class="roomViewArea">
            <table class="roomViewItem">
                <tr class="roomViewItemLine">
                    <td class="roomViewItemLineLeft"></td>
                    <td class="roomViewItemTitleAndText">
                        <div class="roomViewItemTitleAndText_image">
                            <img src="{{ asset('img/hotelListViewImg.jpg') }}" class="hotelViewItemImg" width="100%"
                                height="350px"></img>
                        </div>
                        <div class="roomViewItemTitleAndText_text">
                            <p class="errorMessage">{{ $remainingError }}</p>
                            <p class="roomViewItemTitle">{{ $room->roomName }}</p>
                            <label>
                                <p class="roomViewItemBasicFee">料金：{{ $room->roomFee }}/1日</p>
                            </label>
                            <label>
                                <p class="roomViewItemCountry">残{{ $roomCount }}部屋</p>
                            </label>
                            <div class="roomDetailForm">
                                @if ($ButtonDisplayFlag)
                                    <form action="/reservationInput" method="POST">
                                        @csrf
                                        <input type="hidden" name="roomFee" value="{{ $room->roomFee }}">
                                        <input type="hidden" name="tax" value="{{ $room->tax }}">
                                        <input type="hidden" name="room_info_id" value="{{ $room->id }}">
                                        <input type="submit" class="roomViewItemSelectSubmit"
                                            name="hotelViewItemSelectSubmit" value="予約する">
                                    </form>
                                @endif
                            </div>
                        </div>
                    </td>
                    <td class="roomViewItemLineRight"></td>
                </tr>
            </table>
        </div>
    @endforeach
@endsection
