<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/name/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Name</label>
               <div class="col-md-4">
                   <input type="text" class="form-control" name="name" value="{{old('name')}}">
               </div>
               <button type="submit" class="btn btn-info">Search by name</button>
           </span>
    </div>

</form>