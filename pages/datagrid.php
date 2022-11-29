<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Easyui table</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-1">

        <table class="easyui-datagrid" toolbar="#toolbar" data-options="singleSelect:true,pagination:true,url:'assets/datagrid_data1.json',method:'get'">
          <thead>
            <tr>
              <th data-options="field:'itemid',width:80">Item ID</th>
              <th data-options="field:'productid',width:100">Product</th>
              <th data-options="field:'listprice',width:80,align:'right'">List Price</th>
              <th data-options="field:'unitcost',width:80,align:'right'">Unit Cost</th>
              <th data-options="field:'attr1',width:250">Attribute</th>
              <th data-options="field:'status',width:60,align:'center'">Status</th>
            </tr>
          </thead>
        </table>
        <div id="toolbar" style="padding: 10px 0 10px 0;">

          <a href="javascript:void(0)" class="btn btn-sm btn-primary" plain="true" onclick="newUser()"><i class="fas fa-plus"></i> New User</a>
          <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
          <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

<!-- easyui dlg-->
<div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
  <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
    <h3>User Information</h3>
    <div style="margin-bottom:10px">
      <input name="firstname" class="easyui-textbox" required="true" label="First Name:" style="width:100%">
    </div>
    <div style="margin-bottom:10px">
      <input name="lastname" class="easyui-textbox" required="true" label="Last Name:" style="width:100%">
    </div>
    <div style="margin-bottom:10px">
      <input name="phone" class="easyui-textbox" required="true" label="Phone:" style="width:100%">
    </div>
    <div style="margin-bottom:10px">
      <input name="email" class="easyui-textbox" required="true" validType="email" label="Email:" style="width:100%">
    </div>
  </form>
</div>
<div id="dlg-buttons">
  <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
  <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
</div>
<script>
  var url;

  function newUser() {
    $('#dlg').dialog('open').dialog('center').dialog('setTitle', 'New Record');
    $('#fm').form('clear');

  }
</script>