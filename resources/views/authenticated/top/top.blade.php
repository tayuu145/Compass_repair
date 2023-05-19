@extends('layouts.sidebar')

@section('content')
<div class="vh-100 border">
  <div class="top_area w-75 m-auto pt-5">
    <p>マイページ</p>
    <div class="user_status p-3">
      <p>名前：<span>{{ Auth::user()->over_name }}</span><span class="ml-1">{{ Auth::user()->under_name }}</span></p>
      <p>カナ：<span>{{ Auth::user()->over_name_kana }}</span><span class="ml-1">{{ Auth::user()->under_name_kana }}</span></p>
      <p>性別：@if(Auth::user()->sex == 1)<span>男</span>@else<span>女</span>@endif</p>
      <p>生年月日：<span>{{ Auth::user()->birth_day }}</span></p>
      @if (Auth::user()->role == '4')
      <div>
        <form action="{{ route('user.edit') }}" method="post">
          <div class="mt-3">
            <label class="d-block m-0" style="font-size:13px">選択科目：</label>
            <input type="radio" name="subjects" class="admin_role role" value="1">
            <label style="font-size:13px">国語</label>
            <input type="radio" name="subjects" class="admin_role role" value="2">
            <label style="font-size:13px">数学</label>
            <input type="radio" name="subjects" class="admin_role role" value="3">
            <label style="font-size:13px">英語</label>
          </div>
          <div>
            <input type="submit" class="btn btn-primary register_btn" disabled value="編集">
          </div>
        </form>
      </div>
      @else
      @endif
    </div>
  </div>
</div>
@endsection
