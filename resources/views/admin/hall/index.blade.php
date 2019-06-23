@extends('admin.layouts.admin')
<?
    use App\Hall;
?>
@section('title', 'Halls')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Hall List</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/hall/create" class="btn btn-success">Create Hall</a>
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
                                </thead>
                                <tbody>
                                @foreach($halls as $hall)
                                    <tr>
                                        <td class="text-center">{{ $hall->name }}</td>
                                        <td class="text-center">{{ $hall->url }}</td>
                                        <td class="text-center">{{ Hall::status($hall->status) }}</td>
                                        <td class="text-center"><a href="/admin/hall/update/{{$hall->id}}"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                                        <td class="text-center"><a href="/admin/hall/delete/{{$hall->id}}" data-id="{{$hall->id}}" class="delete"><i class="nc-icon nc-simple-remove"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$halls->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection