<table class="table">
    <thead>
    <tr>
        <th width="5%">#</th>
        <th width="20%">الاسم</th>
        <th width="60%">الصورة</th>
        <th width="5%">تعديل</th>
        <th width="5%">حذف</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0;?>
    @foreach($items as $item)
        <tr>
            <th scope="row">{{++$i}}</th>
            <td>
                {{$item->name}}
            </td>
            <td>
                <a href="{{asset('uploads/'."$item->image")}}" data-fancybox="gallery" data-caption="{{$item->name}}">
                    <img src="{{asset('uploads/'."$item->image")}}" width="120px" height="60px" alt="" />
                </a>
            </td>



            <td>
                @can("edit_news")
                <button class="btn btn-primary update-person" data-route="{{$item->id}}" style="border-radius: 50%;box-sizing: border-box;">
                    <span class="flaticon2-pen"></span>
                </button>
                @endcan
            </td>
            <td>
                @can("delete_news")
                <button class="btn btn-danger delete-person" data-route="{{$item->id}}" style="border-radius: 50%;box-sizing: border-box;">
                    <span class="flaticon2-trash"></span>
                </button>
                @endcan
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$items->links()}}
