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
                    <form action="" style="font-size:1em" class="row" id="upload_form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" class="user_id" data-route="" id="id">

                        @foreach($permission as $item)

                            @foreach($item as $i)
                                <label for="" class="col-sm-4">
                                    {{$i->preview_name}}
                                    <input  class="slider" id="per{{$i->id}}" type="checkbox" value="{{$i->id}}" name="permisssions[]">
                                </label>
                            @endforeach
                                <hr class="col-ms-12" style="width:90%">
                        @endforeach

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
