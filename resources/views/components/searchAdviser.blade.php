<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/adviser/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Adviser</label>
               <div class="col-md-4">
                   <select id="adviser" name="adviser" class="form-control">
                       <option value="0" disabled selected>Please select</option>
                       <option value="1">จารโตววววว</option>
                       <option value="2">จารโจ้ววววว</option>
                   </select>
               </div>
               <button type="submit" class="btn btn-info">Search by adviser</button>
           </span>
    </div>

</form>