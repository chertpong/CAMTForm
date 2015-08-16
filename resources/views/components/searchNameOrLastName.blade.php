<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/name/lastname/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Name</label>
               <div class="col-md-2">
                   <input type="text" class="form-control" name="name" value="{{old('name')}}">
               </div>
              <label class="col-md-2 control-label">Last name</label>
               <div class="col-md-2">
                   <input type="text" class="form-control" name="lastname" value="{{old('lastname')}}">
               </div>
               <button type="submit" class="btn btn-info">Search by name or last name</button>
           </span>
    </div>

</form>