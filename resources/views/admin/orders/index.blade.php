@extends('layout.master_layout')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex flex-row mt-5 ml-3" style="font-size:1.2em">
            <span class="fa fa-user"></span>
            <div class="col-sm-10  font-size-h1-lg">
                طلبات الدورات
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="portlet box green">
                    <div class="portlet-body flip-scroll " id="table_content">
                        @include('admin.orders.pagination_data')
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
                        url:'/admin/orders/'+delete_id+'/delete',
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
                        "تم الالغاء",
                        "أنت بأمان :)",
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
@endsection
