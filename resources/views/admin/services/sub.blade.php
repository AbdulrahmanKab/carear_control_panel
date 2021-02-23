<div class="modal fade" id="control_user" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة خدمة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" >
                <form class="row" id="person_form" method="post">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="form-group row col-12">
                        <label for="" class="col-6">
                            العنوان
                            <input type="text"  class="form-control" name="title" id="title" >
                        </label>
                    </div>
                    <div class="form-group row col-12">
                        <label for="" class="col-6">
                            الوصف
                            <input type="text"  class="form-control" name="description" id="description">
                        </label>
                    </div>
                    <div class="form-group row col-12">
                        <label for="" class="col-6">
                            الايقونة
                            <input type="text"  class="form-control" name="icons" id="icons">
                        </label>
                    </div>
                    <div class="row col-6">
                        اللغة
                        <select name="lang row col-6" id="lang" class="form-control mt-1 mb-1">
                            <option value=""></option>
                            <option value="ar">عربي</option>
                            <option value="en">انجليزي</option>
                        </select>
                    </div>

                    <div class="row col-12">
                        <div class="col-12">
                            اضغط لاختيار الأيقونة
                        </div>
                        <div class="col-12 mt-2">
                            <span data-route="fas fa-id-card" class="fas fa-id-card icon" style="margin-right:1;font-size:3em;color: #6c712e;"></span>
                            <span data-route="fas fa-globe" class="fas fa-globe icon" style="margin-right:1;font-size:3em;color: #6c712e;"></span>
                            <span data-route="fas fa-map-marked-alt" class="fas fa-map-marked-alt icon" style="margin-right:1;font-size:3em;color: #6c712e;"></span>
                            <span data-route="fas fa-thumbs-up" class="fas fa-thumbs-up icon" style="margin-right:1;font-size:3em;color: #6c712e;"></span>
                            <span data-route="fab fa-telegram-plane" class="fab fa-telegram-plane icon" style="margin-right:1;font-size:3em;color: #6c712e;"></span>
                            <span data-route="fab fas fa-laptop-medical" class="fab fas fa-laptop-medical icon" style="margin-right:1;font-size:3em;color: #6c712e;"></span>
                        </div>
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
