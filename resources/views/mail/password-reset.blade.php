@extends('layout')

@section('content')
  <a href="{{ route('password.reset', ['token' => $token]) }}">
    パスワード再設定リンク
  </a>
@endsection
