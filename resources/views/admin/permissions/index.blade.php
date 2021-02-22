@extends('layout.master_layout')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex flex-row mt-5 ml-3" style="font-size:1.2em">
            <span class="fa fa-user"></span>
            <div class="col-sm-10  font-size-h1-lg">
                المستخدمين
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="portlet box green">
                    <div class="portlet-body flip-scroll " id="table_content">
                        @include('admin.permissions.pagination_data')
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection
@section('js')
    <script>
        $(".errors").hide()
        $('.error-users').hide()
    </script>
    <script>
        $(document).on('click','.edit-permission',function (){
            let id = $(this).attr('data-route');
            $('.user_id').val(id);
            $('#permission').modal('show')
            $.ajax({
                url:"/admin/permission/"+id,
                method:'get',
                data:{},
                success:function (response){
                    for(let y = 11; y<18;y++){
                        $('#per'+y).prop('checked', false );
                    }

                    for(let i=0;i<response.data.length;i++){
                        $('#per'+response.data[i].id).prop('checked', true );
                        let name = $("#per"+response.data[i].id).attr("class")

                        $('#'+name).prop('checked', true );
                    }
                    $('#id').attr('data-route',response.data[0].pivot.model_id);
                }
            })
        })
        $(document).on('click','#save-permission',function (){
            let myForm = document.getElementById('upload_form');
            var formData = new FormData(myForm)
            // let id = $('#id').attr('data-route');

            $.ajax({
                url:"/admin/permission/set",
                method:"post",
                data:formData,
                contentType: false,
                cache: false,
                processData: false,
                success:function (){
                    $('#permission').modal('hide')
                }
            })
        })

        $(document).on('click','#save-user',function (){
            let form_user = document.getElementById('user_form');
            let user_form = new FormData(form_user)
            // let id = $('#id').attr('data-route');

            $.ajax({
                url:"/admin/add/user",
                method:"post",
                data:user_form,
                dataType:'html',
                contentType: false,
                cache: false,
                processData: false,
                success:function (res){
                    console.log(res)
                    $('#add_users').modal('hide')
                    $("#table_content").html(res)
                    $('#name').val("")
                    $('#email').val("")
                    $('#password').val("")
                    $('.error-users').hide()
                }
            }).fail  (function(data) {
                var response = JSON.parse(data.responseText);
                var errorString = '<ul>';
                $.each( response.errors, function( key, value) {
                    errorString += '<li>' + value + '</li>';
                });
                errorString += '</ul>'
                $('.error-users').append(errorString)
                $('.error-users').show()
            })
        })
    </script>
    <script>
        $(document).on('click','.delete-row',function (){
            var delete_id = $(this).attr("data-item");
            let item = $(this)
            console.log(delete_id)

            Swal.fire({
                title: "Are you sure?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url:'/admin/user/'+delete_id+'/delete',
                        method:'post',
                        data:{
                            '_token':"{{csrf_token()}}"
                        },
                        dataType:'JSON',
                        success:function (){
                            item.closest('tr').remove()
                        }
                    })

                    Swal.fire(
                        "Deleted!",
                        "Your file has been deleted.",
                        "success"
                    )
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
        $(document).on('click','.change-pass',function (){
            let id = $(this).attr('data-route')
            $('.change_id').val(id)
            $('#change').modal('show')
        })

        $(document).on('click','#change-user',function (){
            let id = $(this).attr('data-route')
            $('.change_id').val(id)
            $('#change').modal('show')
        })

        $(document).on('click','#change-save',function (){

            let form_data = document.getElementById('change_form');
            let change_from = new FormData(form_data);

            $.ajax({
                url: "/admin/user/chagepass",
                method:"post",
                data:change_from,
                contentType: false,
                cache: false,
                processData: false,
                success:function (res){
                    if (res.code ==404){
                        $('.errors').show()
                        $('.errors').append(res.data)
                    }
                    else {
                        $('#change').modal('hide')
                        $("#confirm").val("")
                        $("#change_password").val("")
                    }
                }
            })
        })

    </script>
    <script>
        $(document).on('click','#slider',function (){
            $('.slider').prop('checked',!($(".slider").prop('checked')))
        })
        $(document).on('click','#services',function (){
            $('.services').prop('checked',!($(".services").prop('checked')))
        })
        $(document).on('click','#news',function (){
            $('.news').prop('checked',!($(".news").prop('checked')))
        })
        $(document).on('click','#messages',function (){
            $('.messages').prop('checked',!($(".messages").prop('checked')))
        })
        $(document).on('click','#messages',function (){
            $('.messages').prop('checked',!($(".messages").prop('checked')))
        })
    </script>
@endsection
@section('css')
    <style>
        @media (min-width: 576px){
            .modal-dialog {
                max-width: 880px;
                margin: 1.75rem auto;
            }
        }
    </style>
    @endsection
