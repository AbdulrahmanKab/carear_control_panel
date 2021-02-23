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
                    <form action="" style="font-size:1.3em" class="row" id="upload_form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" class="user_id" data-route="" id="id">
                        <div class="row d-flex flex-column col-sm-12">
                            <div class="col-sm-12">

                                السلايدر
                                <input type="checkbox" id="slider">
                            </div>
                            <div class="col-sm-12">
                                <hr style="  border: 1px solid black!important;opacity: 0.1">
                            </div>
                        </div>
                        <label for="" class="col-sm-4">
                            عرض السلايدر
                            <input  class="slider" id="per1" type="checkbox" value="1" name="permisssions[]">
                        </label>
                        <label for="" class="col-sm-4">
                            اضافة سلايدر
                            <input class="slider"  id="per2" type="checkbox" value="2" name="permisssions[]">
                        </label>
                        <label for="" class="col-sm-4">
                            تعديل السلايدر
                            <input  class="slider" id="per3" type="checkbox" value="3" name="permisssions[]">
                        </label>
                        <label for="" class="col-sm-4">
                            حذف السلايدر
                            <input class="slider"   id="per4" type="checkbox" value="4" name="permisssions[]">
                        </label>
                        <div class="container-fluid mt-5">
                            <div class="row d-flex flex-column">
                                <div class="col-sm-12">
                                    الخدمات
                                    <input type="checkbox" id="services">
                                </div>
                                <div class="col-sm-12">
                                    <hr style="  border: 1px solid black!important;opacity: 0.1">
                                </div>
                            </div>
                            <label for="" class="col-sm-3">
                                عرض الخدمات
                                <input  class="services" id="per5" type="checkbox" value="5" name="permisssions[]">
                            </label>
                            <label for="" class="col-sm-4">
                                اضافة خدمة
                                <input class="services"  id="per6" type="checkbox" value="6" name="permisssions[]">
                            </label>
                            <label for="" class="col-sm-4">
                                تعديل الخدمة
                                <input class="services"  id="per7" type="checkbox" value="7" name="permisssions[]">
                            </label>
                            <label for="" class="col-sm-4">
                                حذف الخدمة
                                <input class="services"   id="per8" type="checkbox" value="8" name="permisssions[]">
                            </label>
                            <div class="container-fluid mt-5">
                                <div class="row d-flex flex-column">
                                    <div class="col-sm-12">
                                        الاخبار
                                        <input type="checkbox" id="news">
                                    </div>
                                    <div class="col-sm-12">
                                        <hr style="  border: 1px solid black!important;opacity: 0.1">
                                    </div>
                                </div>
                            </div>
                            <label for="" class="col-sm-3">
                                عرض الاخبار
                                <input class="news"  id="per9" type="checkbox" value="9" name="permisssions[]">
                            </label>
                            <label for="" class="col-sm-4">
                                اضافة خبر
                                <input class="news"  id="per10" type="checkbox" value="10" name="permisssions[]">
                            </label>
                            <label for="" class="col-sm-4">
                                تعديل خبر
                                <input  class="news" id="per11" type="checkbox" value="11" name="permisssions[]">
                            </label>
                            <label for="" class="col-sm-4">
                                حذف خبر
                                <input class="news" id="per12" type="checkbox" value="12" name="permisssions[]">
                            </label>
                            <div class="container-fluid mt-5">
                                <div class="row d-flex flex-column">
                                    <div class="col-sm-12">
                                        الدورات
                                        <input type="checkbox" id="courses">
                                    </div>
                                    <div class="col-sm-12">
                                        <hr style="  border: 1px solid black!important;opacity: 0.1">
                                    </div>
                                </div>
                            </div>
                            <label for="" class="col-sm-3">
                                عرض الدورات
                                <input class="courses"  id="per13" type="checkbox" value="13" name="permisssions[]">
                            </label>
                            <label for="" class="col-sm-4">
                                اضافة دورة
                                <input class="courses"  id="per14" type="checkbox" value="14" name="permisssions[]">
                            </label>
                            <label for="" class="col-sm-4">
                                تعديل دورة
                                <input class="courses"  id="per15" type="checkbox" value="15" name="permisssions[]">
                            </label>
                            <label for="" class="col-sm-4">
                                حذف دورة
                                <input class="courses"  id="per16" type="checkbox" value="16" name="permisssions[]">
                            </label>
                            <div class="container-fluid mt-5">
                                <div class="row d-flex flex-column">
                                    <div class="col-sm-12">
                                        الرسائل
                                        <input type="checkbox" id="messages">
                                    </div>
                                    <div class="col-sm-12">
                                        <hr style="  border: 1px solid black!important;opacity: 0.1">
                                    </div>
                                </div>
                            </div>
                            <div class="row col-sm-12">
                                <label for="" class="col-sm-4">
                                    عرض الرسائل
                                    <input class="messages"  id="per17" type="checkbox" value="17" name="permisssions[]">
                                </label>
                                <label for="" class="col-sm-4">
                                    حذف الرسائل
                                    <input class="messages" id="per18" type="checkbox" value="18" name="permisssions[]">
                                </label>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr style="  border: 1px solid black!important;opacity: 0.1">
                                    </div>
                                </div>
                            </div>
                            <label class="col-sm-12 mt-5">
                                ثوابت النظام
                                <input   id="per19" type="checkbox" value="19" name="permisssions[]">
                            </label>

                            <label class="col-sm-12 mt-2">
                                اعطاء صلاحيات
                                <input   id="per20" type="checkbox" value="20" name="permisssions[]">
                            </label>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="save-permission">حفظ</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                </div>

            </div>
        </div>
    </div>

</div>
