<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/skill/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Skill</label>
               <div class="col-md-4">
                   <select id="skill" name="skill" class="form-control">
                       <option value="0" disabled selected>Please select</option>
                       <option value="1">อื่นๆ</option>
                       <option value="2">วิชาการ</option>
                   </select>
               </div>
               <button type="submit" class="btn btn-info">Search by skill</button>
           </span>
    </div>

</form>