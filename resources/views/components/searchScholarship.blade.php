<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/scholarship/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Scholarship</label>
               <div class="col-md-4">
                   <select id="scholarship" name="scholarship" class="form-control">
                       <option value="0" disabled selected>Please select</option>
                       <option value="1">เคยได้รับทุน</option>
                       <option value="2">ไม่เคยได้รับทุน</option>
                   </select>
               </div>
               <button type="submit" class="btn btn-info">Search by scholarship</button>
           </span>
    </div>

</form>