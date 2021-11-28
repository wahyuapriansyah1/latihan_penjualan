 @extends('layouts.app')
       @section('content')
           <div class="container">
              <div class="row">
                 <div class="col-md-12">
                 <div class="panel panel-default">
               <div class="panel-head container-fluid" style="margin-top: 10px;">
              <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
             <div class="pull-right">
                 <br>
          <h2>Data produk</h2>
         </div>
         </div>
          <div class="panel-body">
            <table class="table table-striped">
             <thead>
              <tr>
               <th>No</th>
               <th>Nama</th>
                <th>Kategori</th>
                <th>Qty</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Dibuat Pada</th>
                <th>Diedit Pada</th>
            <th colspan="3" style="text-align:center;">Aksi</th>
           </tr>
          </thead>
     <tbody>
          @foreach ($produk as $i => $p)
            <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->Kategori->nama }}</td>
                    <td>{{ $p->qty }}</td>
                    <td>{{ $p->harga_beli }}</td>
                    <td>{{ $p->harga_jual }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td>{{ $p->updated_at }}</td>
                    <td><a href="{{route('produk.show',$p->id) }}" class="btn btn-warning"> Detail</a></td>
                    <td><a class="btn btn-success" href="{{ route('produk.edit',$p->id) }}"> Edit</a></td>
             <td>
             <form method="post"action="{{ route('produk.destroy',$p->id) }}">
                 {{ csrf_field() }}
             <input type="hidden"name="_method" value="DELETE">
             <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
 DELETE
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          apakah anda yakin data ini akan di hapus
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">DELETE</button>
        </div>
      </div>
    </div>
  </div>
                  {{-- <button class="btn btn-danger" type="submit">Hapus</button> --}}
              </form>
          </td>
     </tr>
 @endforeach
   </tbody>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="sweetalert2.all.min.js"></script>
   <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
   </table>
        </div>
       </div>
   </div>
       </div>
        </div>
    @endsection