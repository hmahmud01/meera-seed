

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

                        <h2>Enlisted Product List</h2>

                    </div>

                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>                        
                        <a class="btn btn-info" href="{{ route('categorys.create') }}"> Create New Category</a>                        
                        
                    </div>

                </div>

            </div>



            @if ($message = Session::get('success'))

                <div class="alert alert-success">

                    <p>{{ $message }}</p>

                </div>

            @endif

            

            <table class="table table-bordered">

                <tr>

                    <th>No</th>

                    <th>Image</th>

                    <th>Name</th>

                    <th>Category</th>

                    <th width="280px">Action</th>

                </tr>

                @foreach ($products as $product)

                <tr>

                    <td>{{ ++$i }}</td>

                    <td><img src="/image/{{ $product->image }}" width="100px"></td>

                    <td>{{ $product->name }}</td>

                    <td>{{ $product->category }}</td>

                    <td>

                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">

            

                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

            

                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

            

                            @csrf

                            @method('DELETE')

                

                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </table>


            <div class="mt-5">
                <h2>Existing Category</h2>

                <table class="table table-bordered">

                    <tr>

                        <th>No</th>

                        <th>Name</th>

                        <th>Title</th>

                    </tr>

                    @foreach ($categorys as $category)

                    <tr>

                        <td>{{ ++$i }}</td>

                        <td>{{ $category->name }}</td>

                        <td>{{ $category->title }}</td>

                        <td>

                            <form action="{{ route('categorys.destroy',$category->id) }}" method="POST">  
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>

                    @endforeach

                </table>
            </div>




            {!! $products->links() !!}

                

            @endsection
            </div>
        </div>
    </div>
</x-app-layout>

