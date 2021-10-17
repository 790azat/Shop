@extends('layouts.app')
@section('content')

    <div id="cors" class=" flex-nowrap justify-content-center align-items-center position-fixed cors">

        <div class="cors-number">
                <div id="corsnumber">

                </div>
        </div>

        <div class="cors-img">
            <img src="{{ asset('/cors.png') }}" alt="">
        </div>
<div class="buttons ">

        <button class="btn btn-outline-info px-0 py-1 ml-2">Корзина</button>

       <img id="CorsClear" class="mr-2 ml-2" src="{{ asset('/x-button.png') }}" alt="">
</div>

    </div>



    <div class="container d-flex flex-wrap" >
        @isset($items)
        @foreach($items as $item)
                <div class="card m-3 " style="width: 18rem;" id="card" item="{{ $item->id }}">
                    <img src="{{ $item->img }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text  text-truncate ">{{$item->discription}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut doloribus impedit itaque, laborum saepe sit vel? Accusamus accusantium delectus doloremque eos ex, expedita harum id necessitatibus officia ratione vero vitae voluptas! At consectetur impedit suscipit! Dolor, eveniet excepturi exercitationem facilis maxime quae! Distinctio eius eum necessitatibus nemo reiciendis rerum sequi vel voluptas. Aspernatur deserunt distinctio fuga itaque molestiae nobis praesentium, quae quaerat ratione sint. Aliquid assumenda atque, autem ea eius eos excepturi id ipsam iusto magnam magni molestiae molestias nemo nihil numquam odit perferendis quae quas recusandae sapiente similique, sint soluta tenetur totam unde vel veritatis vitae voluptas voluptatibus.</p>
                        <a href="#" class="btn btn-primary">{{$item->price}}</a>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>


@endsection
