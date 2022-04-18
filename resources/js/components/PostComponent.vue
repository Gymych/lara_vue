<template>
    <div>
        Hi!
        <InnerPostComponent></InnerPostComponent>
        Cya!
        <div>Name: {{name}}</div>
        <div>Computed: {{computeSmthng}}</div>
        <button @click="sayHi">Hi</button>
    </div>
</template>

<script>
import InnerPostComponent from "./InnerPostComponent";
export default {
    name: "PostComponent",

    data() {
        return {
            name: 'Kir',
            age: '33'
        }
    },

    methods: {
        sayHi(){
            console.log('Hi')
        }
    },

    computed: {
        computeSmthng() {
            return this.name + ' Computed data'
        }
    },

    components: {
        InnerPostComponent
    }
}
</script>

<style scoped>

</style>
