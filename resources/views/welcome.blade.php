@extends('layouts.admin.master')

@section('title')Basit Muhasebe Programı
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
  @component('components.breadcrumb')
    @slot('breadcrumb_title')
      <h3>Hoşgeldiniz</h3>
    @endslot
    <li class="breadcrumb-item">Pages</li>
    <li class="breadcrumb-item active">Hoş Geldiniz</li>
  @endcomponent
  
  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-6">
              <div class="card">
                  <div class="card-header pb-0">
                      <h5>Alacak</h5>
                      <span>Alacaklarınızı ve Toplamını Tutar</span>
                  </div>
                  <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>Id </th>
                                <th>Alacak Adı </th>
                                <th>Alacak Fiyatı </th>
                                <th>Miktar </th>
                                <th>Toplam Fiyat </th>
                            </tr>
                        </thead>
                    </table>
                    
                    <script>
                    $(function() {
                        $('#table1').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: '{{ route('welcome') }}',
                            columns: [
                                { data: 'id', name: 'id' },
                                { data: 'gelirAd', name: 'gelirAd' },
                                { data: 'gelirFiyat', name: 'gelirFiyat' },
                                { data: 'miktar', name: 'miktar' },
                                { data: 'toplamFiyat', name: 'toplamFiyat' }
                            ]
                        });
                    });
                    </script>
                  </div>
              </div>
          </div>

          <div class="col-sm-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Verecek</h5>
                    <span>Vereceklerinizi ve Toplamını Tutar</span>
                </div>
                <div class="card-body">
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum."
                    </p>
                </div>
            </div>
        </div>
      </div>
  </div>

  
  @push('scripts')
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  @endpush

@endsection