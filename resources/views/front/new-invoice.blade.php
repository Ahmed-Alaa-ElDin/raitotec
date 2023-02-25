@extends('layouts.front', ['title' => 'New Invoice'])

@section('content')
    @livewire('invoice-form',['invoice' => $invoice])
@endsection
