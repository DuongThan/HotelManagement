@extends('layout')
@section('title', 'Xác nhận đặt phòng')
@section("content")
<div class="row">
    <div class="col-md-12">
        <div class="sectionTitle">
            <h2><span class="lightBg">Xác nhận đặt phòng</span></h2>
            <p></p>
            <p>Khách sạn,resort đang trở thành một xu hướng kinh doanh hot nhất hiện nay. &nbsp;Điểm qua một vài thành
                phố lớn, các khách sạn, nhà nghỉ mọc lên san sát. Kéo theo trào lưu đó, các công việc liên quan đến
                khách sạn đang trở thành một thị trường tiềm năng, trong đó lễ tân khách sạn được coi là công việc
                nhiều hứa hẹn nhất. Tuy nhiên để trở thành một lễ tân khách sạn chuyên nghiệp, bạn cần gì? Đây&nbsp;là
                thắc mắc chung của hầu hết các nhân viên và ứng viên muốn theo đuổi nghề lễ tân khách sạn&nbsp;hiện nay</p>
            <p></p>
        </div>
        <div class="row" style="margin-top:10px">
            <div class="col-md-12">
                {{$data}}
            </div>
        </div>
    </div>
</div>
@endsection
