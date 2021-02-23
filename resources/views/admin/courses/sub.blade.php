<div class="modal fade" id="control_user" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة دورة جديدة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" >
                <form class="row" id="person_form" method="post">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="form-group row col-12">
                        <label for="" class="col-12">
                            العنوان
                            <input type="text"  class="form-control" name="title" id="title" >
                        </label>
                    </div>
                    <label for="" class="form-group row col-12">
                            <span class="mb-2">
                                تفاصيل الدورة
                            </span>
                        <textarea name="description"  class="form-control" id="editor2" rows="10" cols="40">
                                         </textarea>
                    </label>
                    <label for="" class="form-group row col-12">
                            <span class="mb-2 col-sm-12">
                                تفاصيل الدورة
                            </span>
                        <select class="form-control p-2  col-sm-6" name="course_type" id="course_type">
                        </select>
                    </label>
                    <div class="form-group row col-12">
                        <label for="" class="col-6">
                            ارفاق ملف
                            <input type="file"  class="form-control" name="file" id="file">
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary font-weight-bold" id="save">حفظ التغييرات</button>
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">اغلاق</button>
            </div>
        </div>
    </div>
</div>
