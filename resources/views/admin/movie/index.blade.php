@extends('admin.layouts.admin')
<?
    use App\Movie;
?>
@section('title', 'Movies')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Movie List</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/movie/create" class="btn btn-success">Create Movie</a>
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
                                    Poster
                                </th>
                                <th class="text-center">
                                    Status
                                </th>
                                <th class="text-center">

                                </th>
                                </thead>
                                <tbody>
                                @foreach($movies as $movie)
                                    <tr>
                                        <td class="text-center">{{ $movie->name }}</td>
                                        <td class="text-center">{{ $movie->url }}</td>
                                        <td class="text-center">{{ $movie->poster }}</td>
                                        <td class="text-center">{{ Movie::status($movie->status) }}</td>
                                        <td class="text-center"><a href="/admin/movie/update/{{$movie->id}}"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                                        <td class="text-center"><a href="/admin/movie/delete/{{$movie->id}}" data-id="{{$movie->id}}" class="delete"><i class="nc-icon nc-simple-remove"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$movies->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection