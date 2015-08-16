<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/militaryDetail/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Military detail</label>
               <div class="col-md-4">
                   <select id="military_detail" name="military_detail" class="form-control">
                       <option value="0" disabled selected>Please select</option>
                       <option value="1">จบ นศท. ปี 1 และต้องการเรียนต่อ</option>
                   </select>
               </div>
               <button type="submit" class="btn btn-info">Search by military detail</button>
           </span>
    </div>

</form>