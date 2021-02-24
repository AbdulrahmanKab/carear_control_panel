@extends('admin.layout.master_layout')
@section('content')


    <div class="row mt-4">
        <div class="col-sm-2" style="color:#605f5f!important;font-size:1em;">
            <span class="fas fa-home"></span> <span>الرئيسية</span>
        </div>
        <div class="col-sm-2 ml-auto">
            <button class="btn btn-danger add_new font-weight-bold float-right"> اضافة جديد</button>
        </div>
    </div>
    <div class="row">
        <form class="col-sm-12 row ml-3" id="search_form" method="get">
            <input type="text" id="search" name="search" placeholder="ادخل كلمة البحث" class="form-control col-sm-3" />
        </form>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 table-data">
                @include('admin.paginate')
            </div>
        </div>
    </div>
    <div class="modal fade" id="tree_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="tree">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="control_user" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة شخص</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body" >
                    <form class="row" id="person_form" method="post">
                        <input type="hidden" name="id" value="" id="id">
                        <input type="hidden" name="parent_id" value="" id="parent_id" >
                        <div class="col-sm-3 row form-group">
                            <label for="" class="col-sm-12">
                                الاسم الأول
                                <input placeholder="الاسم الأول" type="text" name="first_name" id="first_name" class="form-control">
                                <small class="text-danger" id="first_name_error"></small>
                            </label>
                        </div>
                        <div class="col-sm-3 row form-group">
                            <label for="" class="col-sm-12">
                                الاسم الثاني
                                <input placeholder="الاسم الثاني" type="text" name="second_name" id="second_name" class="form-control">
                                <small class="text-danger" id="second_name_error"></small>
                            </label>
                        </div>
                        <div class="col-sm-3 row form-group">
                            <label for="" class="col-sm-12">
                                الاسم الثالث
                                <input placeholder="الاسم الثالث" type="text" name="third_name" id="third_name" class="form-control">
                                <small class="text-danger" id="third_name_error"></small>
                            </label>
                        </div>
                        <div class="col-sm-3 row form-group">
                            <label for="" class="col-sm-12">
                                اسم العائلة
                                <input placeholder="اسم العائلة" type="text" name="family_name" id="family_name" class="form-control">
                                <small class="text-danger" id="family_name_error"></small>
                            </label>
                        </div>
                        <div class="col-sm-3 row form-group">
                            <label for="" class="col-sm-12">
                                اسم الام
                                <input placeholder="اسم الام" type="text" name="mother_name" id="mother_name" class="form-control">
                                <small class="text-danger" id="mother_name_error"></small>
                            </label>
                        </div>
                        <div class="col-sm-3 row form-group">
                            <label for=""  class="col-sm-12">
                                عائلة الام
                                <input placeholder="عائلة الام" type="text" name="family_mother" id="family_mother" class="form-control">
                            </label>
                        </div>
                        <div class="col-sm-3 row form-group">
                            <label for="" class="col-sm-12">
                                اسم الشهرة
                                <input placeholder="اسم الشهرة" type="text" name="famous_name" id="famous_name" class="form-control">
                            </label>
                        </div>

                        <div class="col-sm-3 row form-group">
                            <label for="" class="col-sm-12">
                                تاريخ الميلاد

                                <div class="input-group date">
                                    <input type="text" name="birthday" class="form-control" id="kt_datepicker_2" readonly="readonly" placeholder="اختر تاريخ الميلاد">
                                    <div class="input-group-append">
															<span class="input-group-text">
																<i class="la la-calendar-check-o"></i>
															</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="col-sm-3 row form-group">
                            <label for=""class="col-sm-12">
                                جنسية الأم

                                <select name="mother_nationality"  id="mother_nationality" class="form-control">
                                    <option value=""></option>
                                    <option value="palestine">فلسطين</option>
                                    <option value="saudi">السعودية</option>
                                    <option value="egypt">مصر</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-sm-3 row">
                            <label for="" class="col-sm-12">
                                الجنس
                                <select name="gender" id="gender" class="form-control p-1">
                                    <option value="male">ذكر</option>
                                    <option value="female">انثى</option>
                                </select>

                            </label>
                        </div>
                        <div class="col-sm-3 row">
                            <label for="" class="col-sm-12">
                                الدولة
                                <select name="country" class="form-control p-1" id="country">

                                </select>

                            </label>
                        </div>
                        <div class="col-sm-3 row">
                            <label for="" class="col-sm-12">
                                المحافظة

                                <select name="brief" class="form-control p-1" id="brief">

                                </select>
                            </label>
                        </div>
                        <div class="col-sm-3 row">
                            <label for="" class="col-sm-12">
                                المدينة
                                <select name="city" class="form-control p-1" id="city">
                                </select>
                            </label>
                        </div>

                        <div class="col-sm-4 row">
                            <label for="" class="col-sm-12">
                                المنطقة
                                <input type="text" name="region" id="region" class="form-control" placeholder="المنطقة">

                            </label>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label for="">
                                صورة
                                <input type="file" name="photo" id="photo" class="form-control" >

                            </label>
                        </div>
                        <div class="col-sm-6 row">
                            <label for="" class="col-sm-6  d-flex flex-row">
                               <span>
                                    هل الشخص متوفي؟
                               </span>
                                <input type="checkbox" class="ml-3 mt-1 form-check-label" name="id_dead" value="1"  id="is_dead"  >
                            </label>
                        </div>
                        <div class="row col-sm-12 dead_box">

                            <div class="col-sm-3 form-group">
                                <label for="">
                                    تاريخ الوفاة

                                    <div class="input-group date">
                                        <input type="text" name="dead_date" class="form-control" id="kt_datepicker_3"  placeholder="اختر تاريخ الوفاة">
                                        <div class="input-group-append">
															<span class="input-group-text">
																<i class="la la-calendar-check-o"></i>
															</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-3 row">
                                <label for="" class="col-sm-12">
                                    دولة الوفاة
                                    <input placeholder="دولة الوفاة" type="text" name="dead_country" id="dead_country" class="form-control">
                                </label>
                            </div>
                            <div class="col-sm-3 row">
                                <label for="" class="col-sm-12">
                                    مكان الوفاة
                                    <input placeholder="مكان الوفاة" type="text" name="dead_place" id="dead_place" class="form-control">
                                </label>
                            </div>
                            <div class="col-sm-12 row form-group">
                                <label for="" class="col-sm-12">
                                    سبب الوفاة
                                    <textarea placeholder="سبب الوفاة" name="dead_reason" id="dead_reason" class="form-control"  rows="6"></textarea>
                                </label>
                            </div>
                            <div class="col-sm-3 row">
                            </div>
                        </div>
                        <div class="row col-sm-12 mt-3">
                            <label for="" class="col-sm-3">
                                جوال
                                <input type="text" placeholder="جوال" name="mobile" id="mobile" class="form-control">
                            </label>
                            <div class="col-sm-3 row">
                                <label for="" class="col-sm-12">
                                    تلفون
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="تلفون">
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-12 row">
                            <label for="" class="col-sm-12">
                                وصف عام
                                <textarea placeholder="وصف عام" name="description" id="description" class="form-control"  rows="6"></textarea>
                            </label>
                        </div>
                        <div class="col-sm-3 ">
                            <label for="" style="width:100%">
                                المهنة
                                <select name="his_job" id="his_job" class="form-control p-1">
                                    <option id="non_selected" value=""></option>
                                    <option value="doctor">طبيب</option>
                                    <option value="worker">عامل</option>
                                    <option value="engineer">مهندس</option>
                                </select>
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
        function fetchData(page){
            $.ajax({
                url:"/admin/?page="+page,
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
            $('#control_user').modal('show')
            $("#first_name").val("")
            $("#second_name").val("")
            $("#third_name").val("")
            $("#family_name").val("")
            $("#mother_name").val("")
            $("#family_mother").val("")
            $("#famous_name").val("")
            $("#kt_datepicker_2").val("")
            $("#mother_nationality").val("")
            $("#gender").val("")
            $("#country").val("")
            $("#brief").val("")
            $("#city").val("")
            $("#region").val("")
            $("#parent_id").val("")
            $("#id").val("")
            $("#photo").val("")
            $("#mobile").val("")
            $('.dead_box').fadeOut()
            $("#phone").val("")
            $("#description").val("")
            $('#is_dead').prop('checked',false)
            $("#non_selected").prop('selected',true)
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
                    url:'/admin/save/person',
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
                    url: '/admin/person/' + id + "/update",
                    method: 'post',
                    data: formDate,
                    dataType: 'json',
                    success: function () {
                        Swal.fire("Good job!", "update");
                        fetchData(1)
                        $('#control_user').modal('hide')
                    },
                    error: function (response) {
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




        })

    </script>
    <script>
        $('.dead_box').fadeOut();
        $(document).on('click','#is_dead',function (){
            $('.dead_box').toggle()
            $("#kt_datepicker_3").val("")
            $("#dead_country").val("")
            $("#dead_place").val("")
            $("#dead_reason").val("")
        })
        $('')
    </script>
    <script>
        $(document).on('click','.update-person',function (){
            let id = $(this).attr('data-route')
            $.ajax({
                url:"/admin/person/"+id,
                method:'post',
                data:{},
                dataType:'json',
                success:function (response){
                    $("#first_name").val("")
                    $("#second_name").val("")
                    $("#third_name").val("")
                    $("#family_name").val("")
                    $("#mother_name").val("")
                    $("#family_mother").val("")
                    $("#famous_name").val("")
                    $("#kt_datepicker_2").val("")
                    $("#parent_id").val("")
                    $("#mother_nationality").val("")
                    $("#gender").val("")
                    $("#country").val("")
                    $("#brief").val("")
                    $("#city").val("")
                    $("#region").val("")
                    $("#photo").val("")
                    ///////////////////////
                    $("#id").val(response.data.id)
                    $("#first_name").val(response.data.first_name)
                    $("#second_name").val(response.data.second_name)
                    $("#third_name").val(response.data.third_name)
                    $("#family_name").val(response.data.family_name)
                    $("#mother_name").val(response.data.mother_name)
                    $("#family_mother").val(response.data.mother_family)
                    $("#famous_name").val(response.data.famous_name)
                    $("#kt_datepicker_2").val(response.data.birthday)
                    $("#mother_nationality option[value="+response.data.mother_national+"]").prop("selected",true)
                    $("#gender").val(response.data.gender)
                    $("#country").val(response.data.country)
                    $("#brief").val(response.data.briefness)
                    $("#city").val(response.data.city)
                    $("#region").val(response.data.region)
                    $("#mobile").val(response.data.mobile)
                    $("#phone").val(response.data.phone)
                    $("#description").val(response.data.description)
                    $("#his_job option[value="+response.data.his_job+"]").prop("selected",true)
                    if (response.data.dead_region){
                        $('#is_dead').prop('checked',true)
                        $('.dead_box').toggle()
                        $("#kt_datepicker_3").val(response.data.dead_date)
                        $("#dead_country").val(response.data.dead_country)
                        $("#dead_place").val(response.data.dead_region)
                        $("#dead_place").val(response.data.dead_region)
                        $("#dead_reason").val(response.data.dead_reason)
                    }
                    $("#control_user").modal('show')

                },
                contentType: false,
                cache: false,
                processData: false,
            })
        })
        $(document).on('click','.add-son',function (){
            let id = $(this).attr('data-route')
            $.ajax({
                url:"/admin/person/"+id,
                method:'post',
                data:{},
                dataType:'json',
                success:function (response){
                    $("#first_name").val("")
                    $("#second_name").val("")
                    $("#third_name").val("")
                    $("#family_name").val("")
                    $("#mother_name").val("")
                    $("#family_mother").val("")
                    $("#famous_name").val("")
                    $("#kt_datepicker_2").val("")
                    $("#mother_nationality").val("")
                    $("#gender").val("")
                    $("#country").val("")
                    $("#brief").val("")
                    $("#city").val("")
                    $("#region").val("")
                    $("#id").val("")
                    $("#photo").val("")
                    $(".dead_box").fadeOut()
                    $('#is_dead').prop('checked',false)
                    $("#mobile").val("")
                    $("#description").val("")
                    $("#phone").val("")
                    $("#non_selected").prop('selected',true)
                    $("#parent_id").val(response.data.id)
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
                        url:"/admin/person/"+id+"/delete",
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

                    Swal.fire(
                        "تم الحذف!",
                        "تم حذف العنصر بنجاح",
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
        $(document).on('click','.show-tree',function (){
            $("#tree_modal").modal("show")
            let id = $(this).attr('data-route')
            $.ajax({
                url:"/trees/"+id,
                success:function(data)
                {
                    var jsonStructureObject = [data['data']];
                    $("#tree").html("")
                    $("#tree").jHTree({
                        callType: 'obj',
                        structureObj: jsonStructureObject
                    });
                }
            });
        })
    </script>
    <script>
        $('#search').on('input',function(e){
            let search = $('#search').val()
            $.ajax({
                url:"/admin?search="+search,
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

    <script>
        $.ajax({
            url:'/admin/system/constant/country',
            method:'post',
            data:{},
            success:function (response){
                $("#country").html("")
                $('#country').append(
                    "<option value="+"'"+"'" +">"+"</option>"
                )
                for(let i =0 ;i<response.data.length;i++){

                    $('#country').append(
                        "<option value="+"'"+response.data[i].name_en +"'" +">"+response.data[i].name_ar +"</option>"
                    )
                }
            },
            contentType: false,
            cache: false,
            processData: false,
        })
        $('#country').change(function() {
            let get_value  = $(this).val();
            $.ajax({
                url:"/admin/get/city",
                method:'post',
                data:{
                    get_value
                }
                ,
                success:function (response){
                    $("#brief").html("")
                    $('#brief').append(
                        "<option value="+"'"+"'" +">"+"</option>"
                    )
                    for(let i =0 ;i<response.data.length;i++){

                        $('#brief').append(
                            "<option value="+"'"+response.data[i].name_en +"'" +">"+response.data[i].name_ar +"</option>"
                        )
                    }
                }
            })
        });
        $('#brief').change(function() {
            let get_value  = $(this).val();
            $.ajax({
                url:"/admin/get/cities",
                method:'post',
                data:{
                    get_value
                }
                ,
                success:function (response){
                    $("#city").html("")
                    $('#city').append(
                        "<option value="+"'"+"'" +">"+"</option>"
                    )
                    for(let i =0 ;i<response.data.length;i++){

                        $('#city').append(
                            "<option value="+"'"+response.data[i].name_en +"'" +">"+response.data[i].name_ar +"</option>"
                        )
                    }
                }
            })
        });
    </script>
@endsection
@section("css")
    <style>
        .zmrcntr{
            display:none;
        }
        .tree ul {
            margin-left:1em;
        }
    </style>

@endsection
