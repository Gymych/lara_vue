<template>
    <div>
        <CreateComponent ref="create"></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
        <InnerPostComponent :obj="obj"></InnerPostComponent>
<!--        <table class="table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">#</th>-->
<!--                <th scope="col">Name</th>-->
<!--                <th scope="col">Age</th>-->
<!--                <th scope="col">Job</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr v-for="person in persons">-->
<!--                <th scope="row">{{ person.id }}</th>-->
<!--                <td>{{ person.name }}</td>-->
<!--                <td>{{ person.age }}</td>-->
<!--                <td>{{ person.job }}</td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
    </div>
</template>

<script>
import InnerPostComponent from "./InnerPostComponent";
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";
export default {
    name: "PostComponent",

    data() {
        return {
            obj: {
                color:"yell",
                number:"14",
                isPublished:false
            }
        }
    },

    components: {
        InnerPostComponent,
        CreateComponent,
        IndexComponent
    }
}
</script>

<style scoped>

</style>
