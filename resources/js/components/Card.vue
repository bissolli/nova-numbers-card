<template>
    <card class="flex flex-col items-center justify-center">
        <div class="px-3 py-3">
            <h2 class="text-center text-4xl text-80 font-light">
                <strong>{{ card.number | numberFormat }}</strong>
            </h2>
            <h4 class="text-center text-80 font-light">
                {{ card.title }}
            </h4>
        </div>
    </card>
</template>

<script>
export default {
    props: {
        card: {
            type: Object,
            required: true
        },
    },

    filters: {
        numberFormat(number) {
            return !isNaN(number) ? Number(number).toLocaleString() : number
        }
    },

    mounted() {
        //
    },
}
</script>
