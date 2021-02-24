@extends('admin.layout.master_layout')
@section('content')
<div class="row">
    <div class="col-sm-12 row mt-3">
        <div class="col-sm-1 ml-auto btn btn-danger add-new">اضافة جديد</div>
    </div>
</div>
<div class="modal fade" id="system_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة ثابت نظام</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form class="row d-flex justify-content-center" id="system_form">
             <div class="col-sm-12 row">
                 <label for="" class="col-sm-6">
                     الثابت
                     <select name="system_constant" class="form-control p-1" id="system_constant">
                         <option value="system_value"></option>

                     </select>
                 </label>
             </div>
                   <div class="col-sm-12 row  country-box">
                       <label for="" class="col-sm-6">
                           الدولة
                           <select name="country" class="form-control p-1" id="country" >
                               <option value=""></option>
                           </select>
                       </label>
                   </div>
                   <div class="col-sm-12 row brief-box">
                       <label for="" class="col-sm-6">
                           المحافظة

                           <select name="brief" class="form-control p-1" id="brief">

                           </select>
                       </label>
                   </div>
                   <div class="col-sm-12 row">
                       <label for="" class="col-sm-6">
                           الاسم:
                           <input id="name_ar" class="form-control mt-1" type="text" name="name_ar">

                       </label>

                   </div>
                   <div class="col-sm-12 row">
                       <label for="" class="col-sm-6">
                           الاسم بالانجليزية:
                           <input id="name_en" class="form-control mt-1" type="text" name="name_en">

                       </label>

                   </div>

               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary save-changes">حفظ</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name=csrf-token]').attr('content')
            }
        })
    </script>
    <script>
        $(".country-box").fadeOut();
        $(".brief-box").fadeOut();
        $(document).on("click",".add-new",function (){
            $.ajax({
                url:'/admin/system/constant/all',
                method:'post',
                data:{},
                success:function (response){
                    $('#system_constant').html("");
                    $('#system_constant').append(
                        "<option value='system_value'></option>"
                    )
                    for(let i =0 ;i<response.data.length;i++){
                        $('#system_constant').append(
                            "<option value="+"'"+response.data[i].value2 +"'" +">"+response.data[i].name_ar +"</option>"
                        )
                    }

                },
                cache:false,
                processData:false,
                contentType:false
            })
            $('#system_modal').modal('show')
            $('#name_ar').val("")
            $('#name_en').val("")
            $('.country-box').fadeOut()
            $('.brief-box').fadeOut()
            $('#system_constant option[value=system_value]').prop('selected',true)
        })
    </script>
    <script>
        $(document).on('click','.save-changes',function (){
            let form = document.getElementById("system_form");
            let form_data = new FormData(form)
           if ( $("#system_constant").val() === 'brief'){
               $.ajax({
                   url:'/admin/system/save/brief',
                   method:'post',
                   data:form_data,
                   success:function (){

                   }
                   ,cache:false,
                   processData:false,
                   contentType:false
               })
           }else if($("#system_constant").val() === 'city'){
               $.ajax({
                   url:'/admin/system/save/city',
                   method:'post',
                   data:form_data,
                   success:function (){
                   }
                   ,cache:false,
                   processData:false,
                   contentType:false
               })
           }
           else {
               $.ajax({
                   url:'/admin/system/save',
                   method:'post',
                   data:form_data,
                   success:function (){

                   }
                   ,cache:false,
                   processData:false,
                   contentType:false
               })
           }
        })


    </script>
    <script>
        $('#system_constant').change(function() {
            if ($(this).val() === 'brief') {
                $('#country').fadeIn()
                $.ajax({
                    url:"/admin/system/constant/country",
                    method:'post',
                    data:{},
                    success:function (response){
                        $("#country").html("")
                        $('#country').append(
                            "<option value="+"'"+"'" +">" +"</option>"
                        )
                        for(let i =0 ;i<response.data.length;i++){

                            $('#country').append(
                                "<option value="+"'"+response.data[i].name_en +"'" +">"+response.data[i].name_ar +"</option>"
                            )
                        }
                    },
                    cache:false,
                    processData:false,
                    contentType:false
                })
                $(".country-box").fadeIn();
            }
            if($(this).val() === 'city'){
                $.ajax({
                    url:"/admin/system/constant/country",
                    method:'post',
                    data:{},
                    success:function (response){
                        $("#country").html("")
                        $('#country').append(
                            "<option value="+"'"+"'" +">" +"</option>"
                        )
                        for(let i =0 ;i<response.data.length;i++){


                            $('#country').append(
                                "<option value="+"'"+response.data[i].name_en +"'" +">"+response.data[i].name_ar +"</option>"
                            )
                        }
                    },
                    cache:false,
                    processData:false,
                    contentType:false
                })
                $(".country-box").fadeIn();
                $('.brief-box').fadeIn()

            }
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
                        if($("#system_constant").val() === 'city'){
                            $(".brief-box").fadeIn()
                        }
                        if($("#system_constant").val() === 'brief'){
                            $(".brief-box").fadeOut()
                        }
                    }
                })
            });
        });
    </script>

@endsection
@section('css')
    <style>
        @media (min-width: 1024px){
            .modal-lg, .modal-xl {
                max-width: 50%!important;
            }
        }

    </style>
    @endsection
