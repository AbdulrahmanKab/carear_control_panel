@extends('admin.layout.master_layout')
@section('content')

    <div class="row mt-4">
        <div class="col-sm-2" style="color:#605f5f!important;font-size:1em;">
            <span class="fas fa-home"></span> <span>الرئيسية</span>
        </div>
        @can("add_news")
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
                @include('admin.partner.paginate')
            </div>
        </div>
    </div>

    @include('admin.partner.sub')
@endsection
@section('js')
    <script>
        $("#image_preview").fadeOut()
        function fetchData(page){
            let search = $('#search').val()
            $.ajax({
                url:"/admin/partners?page="+page,
                method:"get",
                data: {search:search},
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
            $("#name").val("")
            $("#id").val("")
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
            let formData = new FormData(form)
            let id = $("#id").val();
            if ($("#id").val() ==""){
                $.ajax({
                    url:'/admin/save/partner',
                    method:'post',
                    data:formData,
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

                    },
                    contentType: false,
                    cache: false,
                    processData: false,
                })
            }
            else
            {
                $.ajax({
                    url: '/admin/partner/update',
                    method: 'post',
                    data: formData,
                    dataType: 'json',
                    success: function (response) {
                        if (response.status){
                            Swal.fire("تم الحفظ بنجاح", "success");

                        }
                        else {
                            Swal.fire("حدث خطأ","error")
                        }
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
            var id = $(this).attr('data-route')

            $.ajax({
                url:"/admin/partner/edit",
                method:'GET',
                data: {id:id},
                dataType:'json',
                success:function (response){
                    $("#title").val("")
                    $("#link").val("")
                    $("#image").val("")
                    ///////////////////////////
                    $("#id").val(id)
                    $("#name").val(response.data.name)
                    // $("#image").val(response.data.image)
                    $("#image_preview").attr('src',"/uploads/"+response.data.image)
                    $("#image_preview").fadeIn()
                    $("#control_user").modal('show')
                },
                contentType: false,
                cache: false,

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
                        url:"/admin/partner/delete",
                        method:'post',
                        data:{id:id},
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
                        },
                        error:function (){
                        Swal.fire("العنصر غير موجود","error")
                        },
                        cache:false,
                        dataProcess:false,

                    })

                    // result.dismiss can be "cancel", "overlay",
                    // "close", and "timer"
                } else if (result.dismiss === "cancel") {
                    Swal.fire(
                        "تم الالغاء",
                        "أنت بأمان",
                        "error"
                    )
                }
            });
        })
    </script>

    <script>
        $('#search').on('input',function(e){
            let search = $('#search').val()
            fetchData(1);
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


