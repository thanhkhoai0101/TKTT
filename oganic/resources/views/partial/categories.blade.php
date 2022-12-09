<?php
if ($_SERVER['QUERY_STRING']!=""){
    $param=explode('=',$_SERVER['QUERY_STRING']);
}else{
    $param[1]='';
}

?>


    <ul>
        <li class="{{($param[1]=='')?'active':''}}" data-filter="*"><a href="/" style="color: black">All</a></li>
        @foreach($cat as $items)
            <li class="{{($param[1]==$items->id)?'active':''}}" ><a href="?cat_id={{$items->id}}" style="color: black">{{$items->Name}}</a></li>
        @endforeach
<!--        <li data-filter=".oranges">Oranges</li>-->
<!--        <li data-filter=".fresh-meat">Fresh Meat</li>-->
<!--        <li data-filter=".vegetables">Vegetables</li>-->
<!--        <li data-filter=".fastfood">Fastfood</li>-->

    </ul>
