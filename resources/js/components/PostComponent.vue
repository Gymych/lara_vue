<template>
    <div>
        Hi!
        <InnerPostComponent></InnerPostComponent>
        Cya!
        <div>Name: {{name}}</div>
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

    components: {
        InnerPostComponent
    }
}
</script>

<style scoped>

</style>
