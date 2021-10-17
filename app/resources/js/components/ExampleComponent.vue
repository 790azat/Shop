<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    {{ Text.name }}
<!--                    <img src="{{ $item->img }}" class="card-img-top" alt="...">-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">{{ $item->name }}</h5>-->
<!--                        <p class="card-text  text-truncate ">{{ $item->discription }}w</p>-->
<!--                        <a href="#" class="btn btn-primary">{{ $item->price }}</a>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return [
            {"Text": '',           }
        ]
    },
    mounted() {
        console.log('Component mounted.')
        console.log(this.Text)
        console.log(this.Text.id)
    },

}
</script>
