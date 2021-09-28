@extends('categorys.layout')

     
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

                    <h2>Category Add</h2>

                    </div>

                    <div class="pull-right">

                        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

                    </div>

                </div>

            </div>

            

            @if ($errors->any())

                <div class="alert alert-danger">

                    <strong>Whoops!</strong> There were some problems with your input.<br><br>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            

            <form action="{{ route('categorys.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

            

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Name:</strong>

                            <input type="text" name="name" class="form-control" placeholder="Name">

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Title:</strong>

                            <input type="text" name="title" class="form-control" placeholder="Title">

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                            <button type="submit" class="btn btn-primary">Submit</button>

                    </div>

                </div>

            

            </form>

            @endsection
            </div>
        </div>
    </div>
</x-app-layout>


  

