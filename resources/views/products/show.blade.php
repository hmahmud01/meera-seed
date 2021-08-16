@extends('products.layout')

   
     
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meera App') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">

            @section('content')

            <div class="row">

                <div class="col-lg-12 margin-tb">

                    <div class="pull-left">

                        <h2> Show Product</h2>

                    </div>

                    <div class="pull-right">

                        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

                    </div>

                </div>

            </div>

            

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Name:</strong>

                        {{ $product->name }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Subtitle:</strong>

                        {{ $product->subtitle }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Category:</strong>

                        {{ $product->category }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Details:</strong>

                        {{ $product->detail }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Details:</strong>

                        {{ $product->bangla }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Image:</strong>

                        <img src="/image/{{ $product->image }}" width="500px">

                    </div>

                </div>

            </div>

            @endsection
            </div>
        </div>
    </div>
</x-app-layout>

