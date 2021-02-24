@extends('admin.layout.master_layout')
@section('content')
<div class="container-fluid" style="margin-top:7em">
    <form class="row mt-5 ml-5" id="personal_info">
        @csrf
        <div class="col-sm-3">
            <img src="{{asset("uploads/".auth()->user()->image)}}" id="photo" alt="" width="210px" height="228px">
            <input id="image" type="file" name="image" class="mt-3 ml-3">
        </div>
        <div class="col-sm-3 mt-5 d-flex flex-column">
            <label for="">
                الاسم:
            <input type="text" id="name" name="name" class="form-control mt-2" readonly value="{{auth()->user()->name}}">
            </label>
            <label for="" class="mt-3">
                الايميل:
                <input type="text" id="email" name="email" class="form-control mt-2" readonly value="{{auth()->user()->email}}">
            </label>
            <label id="password-box" for="" class="mt-3">
                كلمة السر:
                <input type="text" id="password" name="password" class="form-control mt-2" >
            </label>
        </div>
        <div class="col-sm-1 ml-auto">
            <button class="btn btn-sm btn-info edit">تعديل</button>
        </div>
        <div class="row col-sm-12">
            <div class="col-sm-12 text-right">

            <button class="btn btn-sm btn-success save">حفظ</button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('js')
    <script>
        $("#password-box").fadeOut();
        $("#image").fadeOut();
        $('.save').fadeOut()
        $(document).on('click','.edit',function (event){
            event.preventDefault()
            $("#name").prop('readonly',false)
            $("#email").prop('readonly',false)
            $('#password-box').fadeIn()
            $("#image").fadeIn()
            $('.save').fadeIn()
            $(this).fadeOut()

        })
    </script>

    <script>
        $(document).on('click','.save',function (event){
            event.preventDefault()
            let form = document.getElementById("personal_info")
            let formData = new FormData(form)
            $.ajax({
                url:"/admin/profile/update",
                method:'post',
                data:formData,
                success:function (response){
                    console.log(response.data)
                    $('#name').val(response.data.name)
                    $('#email').val(response.data.email)
                    $("#photo").attr("src","/uploads/"+response.data.image)

                    $("#name").prop('readonly',true)
                    $("#email").prop('readonly',true)
                    $('#password-box').fadeOut()
                    $("#image").fadeOut()
                    $('.save').fadeOut()
                    $(".edit").fadeIn()
                    $("#image").val("")
                },
                contentType: false,
                cache: false,
                processData: false,

            })
        })
    </script>
@endsection
