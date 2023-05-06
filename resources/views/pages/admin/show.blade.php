@extends('layouts.app')

@section('title') {{ strtoupper($user->name) }} @endsection

@section('content')
    <div>
        <h3><i class="bi bi-person"></i> {{ strtoupper($user->name) }}</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ strtoupper($user->name) }}</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive mb-3">
                    <table id="form-table" class="table">
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td>: {{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Unit</th>
                                <td>: {{ $user->unit }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: {{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Nomor HP</th>
                                <td>: {{ $user->phone }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    @if($user->is_active == 1)
                    <button class="btn btn-danger" data-bs-target="#deactivate-admin-modal" data-bs-toggle="modal">Nonaktifkan</button>
                    @else
                    <form action="{{ route('admin.active', ['user' => $user]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Aktifkan</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <x-modal.deactivate-admin :user="$user"/>
@endsection