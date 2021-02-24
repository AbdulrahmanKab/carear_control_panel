<div class="modal fade" id="control_user" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة شريك</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" >
                <form class="row" id="person_form" method="post">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="row col-12 mr-5">
                        <img src="" style="width:150px;height:150px;" id="image_preview" alt="">

                    </div>
                    <div class="form-group row col-8">
                        <label for="" class="col-12">
                            العنوان
                            <input type="text"  class="form-control" name="name" id="name" >
                        </label>
                    </div>
                    <div class="form-group row col-12">
                        <label for="" class="col-6">
                            اضافة صورة
                            <input type="file"  class="form-control" name="image" id="image" >
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
