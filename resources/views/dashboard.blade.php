@extends('layout')
@section('content')
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
     @if($message = Session::get('berhasil'))
    <script>
        Swal.fire({
            title: "Terima Kasih",
            text: "{{ Session::get('berhasil') }}",
            icon: "success"
        });
    </script>
@endif
    <a class="navbar-brand" href="#"></a>
    <button
        class="btn btn-link btn-sm order-1 order-lg-0"
        id="sidebarToggle"
        href="#">
        <i class="fas fa-bars"></i>
    </button >
    
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ml-md-0 d-flex">
        <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle"
                id="userDropdown"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="false"
                aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
               
                <li><div class="dropdown-divider"></div></li>
               <li> <a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

            <div class="sb-sidenav-footer">
                <div class="small"></div>
                
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Pesan Saya</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
               $counter = 1; // inisialisasi counter
              @endphp
                    @foreach ($contacts as $item)
                        
                    <tr>
                        {{-- <th scope="row">1</th> --}}
                        <td>{{ $counter++ }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->pesan }}</td>
                        <td>

                            <a href="{{ url('/admin/delete/'.$item->id) }}" class="btn btn-danger" >Delete</a>
                            <a href="{{ url('/admin/update/'.$item->id) }}" class="btn btn-success" >Update</a>
                        </td>
                        
                    </tr>
                    
                    @endforeach
                </tbody>
                </table>
        </main>  
</div>
    
@endsection