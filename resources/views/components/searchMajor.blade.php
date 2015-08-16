<form class="form-horizontal" role="form" method="POST" action="{{ url('reports/students/major/search') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
           <span>
               <label class="col-md-2 control-label">Major</label>
               <div class="col-md-4">
                   <select id="major" name="major" class="form-control">
                       <option value="0" disabled selected>Please select</option>
                       <option value="1">วิศวกรรมซอฟต์แวร์</option>
                       <option value="2">แอนนิเมชั่น</option>
                       <option value="3">การจัดการสมัยใหม่</option>
                   </select>
               </div>
               <button type="submit" class="btn btn-info">Search by major</button>
           </span>
    </div>

</form>