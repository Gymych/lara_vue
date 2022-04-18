<template>
    <div>
        Hi!
        <InnerPostComponent></InnerPostComponent>
        Cya!
        <div>Name: {{name}}</div>
        <div>Computed: {{computeSmthng}}</div>
        <button @click="sayHi">Hi</button>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in persons">
                <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import InnerPostComponent from "./InnerPostComponent";
export default {
    name: "PostComponent",

    data() {
        return {
            persons: [
                {
                    id: 1,
                    name: 'Kir',
                    age: '33',
                    job: 'chief'
                },
                {
                    id: 2,
                    name: 'Pash',
                    age: '28',
                    job: 'coChief'
                },
                {
                    id: 3,
                    name: 'kol',
                    age: '45',
                    job: 'driver'
                },
            ]

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
