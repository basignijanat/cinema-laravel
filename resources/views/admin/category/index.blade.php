@extends('admin.layouts.admin')

<?
    use App\Category;
?>

@section('title', 'Admin - Category')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Category List</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/category/create" class="btn btn-success">Create film</a>
                            </div>
                        </div>
                    </div>
                    <div class=""></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <thead class=" text-primary">
                                <th class="text-center">
                                    Name
                                </th>
                                <th class="text-center">
                                    Url
                                </th>
                                <th class="text-center">
                                    Status
                                </th>
                                <th class="text-center">

                                </th>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="text-center">{{ $category->name }}</td>
                                            <td class="text-center">{{ $category->url }}</td>
                                            <td class="text-center">{{ Category::status($category->status) }}</td>
                                            <td class="text-center"><a href="/admin/category/update/{{$category->id}}"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                                            <td class="text-center"><a href="/admin/category/delete/{{$category->id}}" data-id="{{$category->id}}" class="delete"><i class="nc-icon nc-simple-remove"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$categories->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection