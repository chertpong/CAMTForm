<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/degree/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Degree</label>
               <div class="col-md-4">
                   <select id="degree" name="degree" class="form-control">
                       <option value="0" disabled selected>Please select</option>
                       <option value="1">Undergraduate (ปริญญาตรี)</option>
                       <option value="2">Master (ปริญญาโท)</option>
                       <option value="3">Ph.D (ปริญญาเอก)</option>
                   </select>
               </div>
               <button type="submit" class="btn btn-info">Search by degree</button>
           </span>
    </div>

</form>