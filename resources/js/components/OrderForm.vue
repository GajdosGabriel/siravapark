

<script>
    export default {
        data: function () {
            return {
             isOpen: false
            }
        }
    }
</script>

<style>
    .slide-enter-active {
        animation: bounce-in 1s;
    }
    .slide-leave-active {
        animation: bounce-in .8s reverse;
    }
    /*@keyframes bounce-in {*/
    /*    0% {*/
    /*        transform: scale(.2);*/
    /*    }*/
    /*    50% {*/
    /*            transform: scale(1.2);*/
    /*        }*/
    /*    100% {*/
    /*        transform: scale(1);*/
    /*    }*/
    /*}*/

    @keyframes bounce-in {
        from {
            margin-left:100%;
            width:300%
        }
        to {
            margin-left:0%;
            width:100%;
        }
    }

</style>
