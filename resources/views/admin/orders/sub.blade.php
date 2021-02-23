<div class="container-fluid">
    <div class="modal" id="permission">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">تعديل الصلاحيات</h4>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" class="row" id="upload_form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" class="user_id" data-route="" id="id">
                        <label for="" class="col-sm-4">
                            عرض الافراد
                            <input  id="per1" type="checkbox" value="view_person" name="view_person">
                        </label>
                        <label for="" class="col-sm-4">
                            اضافة فرد
                            <input  id="per2" type="checkbox" value="add_person" name="add_person">
                        </label>
                        <label for="" class="col-sm-4">
                            تعديل الافراد
                            <input  id="per3" type="checkbox" value="edit_person" name="edit_person">
                        </label>
                        <label for="" class="col-sm-4">
                            حذف الافراد
                            <input   id="per4" type="checkbox" value="delete_person" name="delete_person">
                        </label>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr style="  border: 1px solid black!important;opacity: 0.1">
                                </div>
                            </div>
                        </div>
                        <label class="col-sm-12 mt-2">
                            اعطاء صلاحيات
                            <input   id="per5" type="checkbox" value="super_admin" name="super_admin">
                        </label>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="save-permission">حفظ</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                </div>

            </div>
        </div>
    </div>

</div>
