<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/id/search') }}">

       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Student ID</label>
               <div class="col-md-4">
                   <input type="text" class="form-control" name="id" value="{{old('id')}}">
               </div>
               <button type="submit" class="btn btn-info">Search by ID</button>
           </span>
       </div>

</form>