@extends('layouts.admin')
@section('content')
   <!-- Begin Page Content -->
   <div class="container-fluid">
    <a  href="{{ route('admin.product.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create</a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh Sách Sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>SalePrice</th>
                            <th>Weight</th>
                            <th>StockQuantity</th>
                            <th>Category</th>
                            <th>Images</th>
                            <th>chức năng </th>
                        </tr>
                    </thead>
                    <tbody id="loadproduct">
                        <tr>
                         <td>Name</td>
                         <td>Description</td>
                         <td>SalePrice</td>
                         <td>Weight</td>
                         <td>StockQuantity</td>
                         <td>Category</td>
                         <td>Images</td>
                         <th>chức năng </th>
                        </tr>
                    </tbody>
                </table>
            </div>
          
        </div >
    </div>

</div>
<!-- /.container-fluid -->
</div>
<script src="{{asset('js/demo/adminproduct.js')}}"></script>
@endsection
@section('script')

<!-- Page level plugins -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('../js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('../js/demo/chart-pie-demo.js')}}"></script>

@endsection             