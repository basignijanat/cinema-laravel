@extends('admin.layouts.admin')
<?
    use App\Place;
?>
@section('title', 'Places')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Place List</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/place/create" class="btn btn-success">Create Place</a>
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
                                    Hall Id
                                </th>
                                <th class="text-center">
                                    Seat Row
                                </th>
                                <th class="text-center">
                                    Seat Place
                                </th>
                                <th class="text-center">
                                    Type
                                </th>
                                <th class="text-center">
                                    Status
                                </th>
                                </thead>
                                <tbody>
                                @foreach($places as $place)
                                    <tr>
                                        <td class="text-center">{{ $place->hall_id }}</td>
                                        <td class="text-center">{{ $place->seat_row }}</td>
                                        <td class="text-center">{{ $place->seat_place }}</td>
                                        <td class="text-center">{{ $place->type }}</td>
                                        <td class="text-center">{{ Place::status($place->status) }}</td>
                                        <td class="text-center"><a href="/admin/place/update/{{$place->id}}"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                                        <td class="text-center"><a href="/admin/place/delete/{{$place->id}}" data-id="{{$place->id}}" class="delete"><i class="nc-icon nc-simple-remove"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$places->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection