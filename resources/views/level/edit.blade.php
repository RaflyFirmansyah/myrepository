@extends('layouts.master')


@section('content')
<div class="main">
    <div class="main-content">
      <div class="fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Inputs</h3>
        </div>
        <div class="panel-body">
          <form action="/level/{$level->id_level}/update" method="POST">
                    {{csrf_field()}}
                  <div class="form-group">
                <label for="exampleInputEmail1">Id level</label>
                <input  name="id_level" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id level" value="{{$level->id_level}}">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Nama Level</label>
                <input name="nama_level" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Level" value="{{$level->nama_level}}">
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
                  </form>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
@stop