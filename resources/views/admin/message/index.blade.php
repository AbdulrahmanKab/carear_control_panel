@extends('admin.layout.master_layout')
@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-12 table-data">
                @include('admin.message.paginate')
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function fetchData(page){
            $.ajax({
                url:"/admin/messages?page="+page,
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
    </script>
    <script>
        $(document).on('click','.btn-danger',function (){
            let id = $(this).attr('data-route');
            let item = $(this);
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
                        url:"/admin/message/"+id+"/delete",
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
                        "تم الحذف!",
                        "تم الحذف بنجاح!",
                        "success"
                    )
                    // result.dismiss can be "cancel", "overlay",
                    // "close", and "timer"
                } else if (result.dismiss === "cancel") {
                    Swal.fire(
                        "تم الالغاء",
                        "انت بأمان",
                        "error"
                    )
                }
            });

        })
    </script>
@endsection
