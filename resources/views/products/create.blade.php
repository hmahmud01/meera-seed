@extends('products.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

        <h2>Product Add</h2>

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

   

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

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

                <strong>Subtitle:</strong>

                <input type="text" name="subtitle" class="form-control" placeholder="Subtitle">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Detail:</strong>

                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Detail in Bangla:</strong>

                <textarea class="form-control" style="height:150px" name="bangla" placeholder="Detail"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name="category" id="category">
                    <option value="seed">Seed</option>
                    <option value="compost">Compost</option>
                    <option value="equipment">Equipment</option>
                    <option value="commodity">Commodity</option>                
                </select>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>

@endsection