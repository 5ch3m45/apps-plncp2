@extends('layouts.app')

@section('title') Admin @endsection

@section('content')
    <div>
        <h3><i class="bi bi-people"></i> Admin</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <h5>Filter</h5>
                <form class="row">
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <label class="form-label">Cari</label>
                        <input type="text" name="search" class="form-control" placeholder="Cari" value="">
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <label class="form-label">Urutkan</label>
                        <select name="sort" class="form-control" value="">
                            <option value="name">Nama</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <div>
                            <label class="form-label">&nbsp;</label>
                        </div>
                        <button type="submit" class="btn btn-primary me-2"><i class="bi bi-search"></i> Cari</button>
                        <a href="/dashboard/admin/create">
                            <button type="button" class="btn btn-success">+ Baru</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive mb-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">:</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nama</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Unit</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Email</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Nomor HP</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Terakhir Login</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td><a href="{{ route('admin.show', compact('user')) }}">Detail</a></td>
                                <td>{{ strtoupper($user->name) }}</td>
                                <td>{{ strtoupper($user->unit) }}</td>
                                <td>{{ strtolower($user->email) }}</td>
                                <td>{{ $user->phone ?? '-' }}</td>
                                <td>{{ $user->last_login }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Belum ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $users->render("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
@endsection