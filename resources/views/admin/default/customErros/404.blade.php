@extends('admin.default.customErros.minimal')

@section('title', __('Forbidden'))
@section('code', $code)
@section('message', __($msg ?: 'Forbidden'))
