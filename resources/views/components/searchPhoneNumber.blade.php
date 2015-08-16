<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/phoneNumber/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Phone number</label>
               <div class="col-md-4">
                   <input type="text" class="form-control" name="phone_number" value="{{old('phone_number')}}">
               </div>
               <button type="submit" class="btn btn-info">Search by phone number</button>
           </span>
    </div>

</form>