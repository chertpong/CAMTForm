<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/loan/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Loan</label>
               <div class="col-md-4">
                   <select id="loan" name="loan" class="form-control">
                       <option value="0" disabled selected>Please select</option>
                       <option value="1">เคยกู้เงินจากกองทุนกู้ยืมเพื่อการศึกษา</option>
                       <option value="2">ไม่เคยกู้เงินจากกองทุนกู้ยืมเพื่อการศึกษา</option>
                   </select>
               </div>
               <button type="submit" class="btn btn-info">Search by loan</button>
           </span>
    </div>

</form>