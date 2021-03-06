@extends('layouts.admin')

@section('title','Dashboard Transaction Page ')
    
@section('content')
  <!-- Page Content -->
    <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard Admin</h2>
                <p class="dashboard-subtitle">
                  List Of Transaction
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                              <thead>
                                <tr>
                                  <td>ID</td>
                                  <td>Product</td>
                                  <td>User</td>
                                  <td>Price</td>
                                  <td>Status</td>
                                  <td>Kode</td>
                                </tr>
                              </thead>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@push('addon-script')
<script>
  var datatable = $('#crudTable').DataTable({
      processing: true,
      serverSide : true,
      ordering : true,
      ajax: {
      //url: '{!! route('transaction.index') !!}',
     url:'{!! url()->current() !!}',
      // dd($index);
      },
      columns:[
        { data:'id', name:'id'},
        { data:'product.name', name:'product.name'},
        { data:'transaction.user.name', name:'transaction.user.name'},
        { data:'price', name:'price'},
        { data:'shipping_status', name:'shipping_status'},
        { data:'code', name:'code'},
      ]
  })
</script>
    
@endpush