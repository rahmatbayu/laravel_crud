@extends('app')

@section('title')
    Buku | Create
@endsection

@section('content')


<div class="panel panel-default">
    <div class="panel-body">
	    <h4><i class="fa fa-plus-square"></i> TAMBAH BUKU</h4>
	    
				</div>
	        </div>

            <div class="col-md-6">
		    	<div class="panel panel-default">
	  				<div class="panel-body">

                        @include('errors.listerr')

						{!! Form::open(array('url' => '/buku')) !!}
						<div class="form-group">
							{!! Form::label('isbn', 'No Buku') !!}
							{!! Form::text('isbn',null, array('class' => 'form-control','placeholder'=>'no...')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('judul', 'Judul') !!}
							{!! Form::text('judul', null, array('class' => 'form-control','placeholder'=>'Judul Buku')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('pengarang', 'Pengarang') !!}
							{!! Form::text('pengarang', null, array('class' => 'form-control','placeholder'=>'Pengarang Buku')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('penerbit', 'Penerbit') !!}
							{!! Form::text('penerbit', null, array('class' => 'form-control','placeholder'=>'Penerbit Buku')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('halaman', 'Halaman') !!}
							{!! Form::text('halaman', null, array('class' => 'form-control','placeholder'=>'Halaman Buku')) !!}
						</div>

						{!! Form::button('<i class=""></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
                        {!! Form::button('<i class=""></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}

						{!! Form::close()!!}
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
