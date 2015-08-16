<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/fatherMotherStatus/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Family status</label>
               <div class="col-md-4">
                   <select id="father_mother_status" name="father_mother_status" class="form-control">
                       <option value="0" disabled selected>Please select</option>
                       <option value="1">อยู่ด้วยกัน</option>
                       <option value="2">แยกกันอยู่</option>
                       <option value="3">หย่า</option>
                   </select>
               </div>
               <button type="submit" class="btn btn-info">Search by familty status</button>
           </span>
    </div>

</form>