@extends('layouts.app')
        @section('content')
        <div class="container">
            <div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-head container-fluid" style="margin-top: 10px;">
            <h3>Data Detail produk</h3>
            </div>
        <div class="form-horizontal">
        <div class="panel-body">{{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        
            <div class="form-group">
                <div class="alert alert-primary" role="alert">
                <label class="col-sm-2" >Nama Produk</label>
                </div>
                    <div class="col-sm-10">
                        <p>{{ $produk->nama }}</p>
                    </div>
                </div>
            <div class="form-group">
                <div class="alert alert-primary" role="alert">
         <label class="col-sm-2">Kategori Produk</label>
                </div>
        <div class="col-sm-10">
        {{ $produk->kategori->nama }}
         </div>
            </div>
        <div class="form-group">
            <div class="alert alert-primary" role="alert">
            <label class="col-sm-2">Qty Awal</label>
            </div>
            <div class="col-sm-10">
        <p>{{ $produk->qty }}</p>
        </div>
         </div>
        <div class="form-group">
            <div class="alert alert-primary" role="alert">
        <label class="col-sm-2">Harga Jual</label>
            </div>
         <div class="col-sm-10">
             <p>{{ $produk->harga_jual }}</p>
        </div>
        </div>
    <div class="form-group">
        <div class="alert alert-primary" role="alert">
        <label class="col-sm-2">Harga Beli</label>
        </div>
    <div class="col-sm-10">
    <p>{{ $produk->harga_beli }}</p>
    </div>
    </div>
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <a href="{{ route('produk.index') }}" class="btn btn-warning">Data Produk</a>
        </div>
        </div>
    </div>
    </div>
     </div>
     </div>
 </div>
</div>
@endsection