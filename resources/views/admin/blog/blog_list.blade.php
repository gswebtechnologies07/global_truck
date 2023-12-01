@include('layouts.admin.header')
<div class="right_col" role="main">
   <div class="clearfix"></div>
   <div class="row">
      @if($message=Session::get('success'))
      <div class="alert bg-green alert-dismissible" role="alert" id="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
         </button>
         {{ $message }}
      </div>
      @endif
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_content">
               <!--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->
            </div>
            <a href="{{route('add-blog')}}"><button type="button" class="btn btn-primary">Add New Blog</button></a>
            <div class="table-responsive">
               <table id="table_id" class="table table-striped jambo_table bulk_action">
                  <thead>
                     <tr class="headings">
                        <th class="column-title">Title</th>
                        <th class="column-title">Added By </th>
                        <th class="column-title">Featured </th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        <th class="column-title">Status </th>
                        </th>
                        <th class="bulk-actions" colspan="7">
                           <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($blog as $key => $blogs)
                     <tr class="even pointer">
                        <td class=" ">{{$blogs->title}}</td>
                        <td class=" ">{{$blogs->added_by}}</td>
                        <td class=" ">{{$blogs->is_featured}}</td>
                        <td class="last">
                           <a href="{{ route('edit-blog',$blogs->id) }}">Edit</a>
                           <a  href="{{ route('blog-delete',$blogs->id) }}" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        <td>
                           <select id="status" onchange="updateStatus({{$blogs['id']}},this.selectedIndex)" name="status">
                              <option value="enable" <?php if ($blogs['status'] == 'enable') echo "Selected"; ?>>{{__('Enable')}}</option>
                              <option value="disable" <?php if ($blogs['status'] == 'disable') echo "Selected"; ?>>{{__('Disable')}}</option>
                           </select>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@include('layouts.admin.footer')-->
<script>
   $(document).ready( function () {
       $('#table_id').DataTable();
   } );
</script>
<!--change status through ajax-->
<script>
   function updateStatus(id, selectedId) {
       var _token = "{{csrf_token()}}";
       var status = document.getElementById('status').options[selectedId].value;
       var qs = {
           id: id,
           status: status,
           _token: _token
       };
       
       $.ajax({
           url: "{{route('update-blog-status')}}",
           method: "POST",
           data: qs,
           success: function(result) {
               alertify.set('notifier', 'position', 'top-right');
               alertify.success(result.message);
           },
           error: function(request, status, error) {
               console.log('Error is' + request.responseText);
           }
       });
   }
</script>