<template>
    <div>
        <div>Color: {{obj.color}}</div>
        <div>Number: {{ obj.number > 10 ? "More then 10" : "Less then 10"}}</div>
        <div>Is published: {{ obj.isPublished ? "Published" : "Not published"}}</div>
    </div>
</template>

<script>
export default {
    name: "InnerPostComponent",

    props: [
        'obj'
    ]
}
</script>

<style scoped>

</style>
