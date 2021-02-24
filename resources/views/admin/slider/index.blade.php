@extends('admin.layout.master_layout')
@section('content')

    <div class="row mt-4">
        <div class="col-sm-2" style="color:#605f5f!important;font-size:1em;">
            <span class="fas fa-home"></span> <span>الرئيسية</span>
        </div>
        @can('add_slider')
        <div class="col-sm-2 ml-auto">
            <button class="btn btn-danger add_new font-weight-bold float-right"> اضافة جديد</button>
        </div>
        @endcan
    </div>
    <div class="row">
        <form class="col-sm-12 row ml-3" id="search_form" method="get">
            <input type="text" id="search" name="search" placeholder="ادخل كلمة البحث" class="form-control col-sm-3" />
        </form>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 table-data">
                @include('admin.slider.paginate')
            </div>
        </div>
    </div>

    <div class="modal fade" id="control_user" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة محتوى للسلايدر</h5>
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
                                لينك
                                <input type="text"  class="form-control" name="link" id="link">
                            </label>
                        </div>
                        <div class="row col-12">
                            <img src="" style="width:150px;height:150px;" id="image_preview" alt="">

                        </div>
                        <div class="form-group row col-12">
                            <label for="" class="col-6">
                                صورة الخلفية
                                <input type="file" class="form-control" name="image" id="image" >
                            </label>
                        </div>
                        <div class="form-group row col-12">
                            <label for="" class="col-6">
                                فعال
                                <input type="checkbox"  value="1" class="" name="status" id="status">
                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary font-weight-bold" id="save">حفظ التغييرات</button>
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $("#image_preview").fadeOut()
        function fetchData(page){
            $.ajax({
                url:"/admin/slider?page="+page,
                method:"get",
                dataType:'html',
                success:function (data){
                    $('.table-data').html('')
                    $('.table-data').append(data)
                }
            })
        }
        $(document).on('click','.pagination a',function(event){
            event.preventDefault()
            var page = $(this).attr('href').split('page=')[1];
            fetchData(page)
        })
        $(document).on('click','.add_new',function (){
            $("#title").val("")
            $("#link").val("")
            $("#id").val("")
            $("#status").prop('checked',false)
            $("#image_preview").fadeOut()
            $('#control_user').modal('show')
        })
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name=csrf-token]').attr('content')
            }
        })
    </script>
    <script>
        $(document).on('click','#save',function (){
            let form = document.getElementById("person_form");
            let formDate = new FormData(form)
            let id = $("#id").val();
            if ($("#id").val() ==""){
                $.ajax({
                    url:'/admin/save/slider',
                    method:'post',
                    data:formDate,
                    dataType:'json',
                    success:function (response){
                        if (response.status){
                            Swal.fire("تم الحفظ بنجاح", "success");

                        }
                        else {
                            Swal.fire("حدث خطأ","error")
                        }
                        fetchData(1);
                        $('#control_user').modal('hide')
                    },
                    error: function(response) {
                        $('#first_name_error').text(response.responseJSON.errors.first_name[0]);
                        $('#second_name_error').text(response.responseJSON.errors.second_name[0]);
                        $('#mother_name_error').text(response.responseJSON.errors.mother_name[0]);
                        $('#family_name_error').text(response.responseJSON.errors.family_name[0]);
                        $('#third_name_error').text(response.responseJSON.errors.third_name[0]);
                    },
                    contentType: false,
                    cache: false,
                    processData: false,

                })
            }
            else
            {
                $.ajax({
                    url: '/admin/slider/' + id + "/update",
                    method: 'post',
                    data: formDate,
                    dataType: 'json',
                    success: function () {
                        Swal.fire("Good job!", "update");
                        fetchData(1)
                        $('#control_user').modal('hide')
                    },
                    error: function (response) {

                    },
                    contentType: false,
                    cache: false,
                    processData: false,

                })
            }


        })

    </script>

    <script>
        $(document).on('click','.update-person',function (){
            let id = $(this).attr('data-route')
            $.ajax({
                url:"/admin/slider/"+id,
                method:'post',
                data:{},
                dataType:'json',
                success:function (response){
                    $("#title").val("")
                    $("#link").val("")
                    $("#image").val("")
                    $("#status").prop('checked',false)
                    ///////////////////////
                    if (response.data.status ==1){
                        $("#status").prop('checked',true)
                    }
                    $("#id").val(id)
                    $("#title").val(response.data.title)
                    $("#link").val(response.data.link)
                   // $("#image").val(response.data.image)
                    $("#image_preview").attr('src',"/uploads/"+response.data.image)
                    $("#image_preview").fadeIn()
                    $("#control_user").modal('show')
                },
                contentType: false,
                cache: false,
                processData: false,
            })
        })
    </script>
    <script>
        $(document).on('click','.delete-person',function (){
            let item = $(this);
            Swal.fire({
                title: "هل أنت متأكد؟",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "نعم",
                cancelButtonText: "لأ!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    let id = item.attr('data-route')
                    $.ajax({
                        url:"/admin/slider/"+id+"/delete",
                        method:'post',
                        data:{},
                        success:function (response){
                            if (response.status){
                                Swal.fire(
                                    "تم الحذف!",
                                    "تم حذف العنصر بنجاح",
                                    "success"
                                )
                            }else {
                                Swal.fire("العنصر غير موجود","error")
                            }
                            item.closest('tr').remove()
                        }

                    })


                    // result.dismiss can be "cancel", "overlay",
                    // "close", and "timer"
                } else if (result.dismiss === "cancel") {
                    Swal.fire(
                        "Cancelled",
                        "Your are in safe :)",
                        "error"
                    )
                }
            });
        })
    </script>

    <script>
        $('#search').on('input',function(e){
            let search = $('#search').val()
            $.ajax({
                url:"/admin/slider?search="+search,
                method:'GET',
                data:{},
                dataType:'HTML',
                success:function (data){
                    $('.table-data').html('')
                    $('.table-data').append(data)
                },
                contentType: false,
                cache: false,
                processData: false,
            })
        });

    </script>

@endsection
@section("css")
    <style>
        @media (min-width: 1024px){
            .modal-lg, .modal-xl {
                max-width: 50%!important;
            }
        }
    </style>
@endsection
