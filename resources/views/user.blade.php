@extends('layout.mainlayout')

@section('title', 'User')

@section('content')

    <h1> User list </h1>



    <div class="mt-5 d-flex justify-content-start">
        <a href="/registered-users" class="btn btn-success bi bi-binoculars-fill btn-lg"> View Register User</a>
    </div>

    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>



    <div class="my-5">
        <table class="table table-info table-striped table-hover">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->u_name }}</td>
                        <td>
                            @if ($item->phone)
                                {{ $item->phone }}
                            @else
                                <p>Tidak ada data</p>
                            @endif
                        </td>
                        <td>
                            <a href="/users-detail/{{ $item->slug }}"><i class="bi bi-eye"></i></a>
                            <a href="/user-delete/{{ $item->slug }}"><i class="fa-solid fa-trash"></i></a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
