<template>
    <div v-if="person">
        <div>
            Имя: {{ person.name }}
        </div>
        <div>
            Возраст: {{ person.age }}
        </div>
        <div>
            Профессия: {{ person.job }}
        </div>
        <div>
            <router-link
                :to="{name: 'person.edit', params: {id: this.person.id}}"
                class="btn btn-primary"
            >Редактировать
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "Show",

    mounted () {
        this.$store.dispatch("getPerson", this.$route.params.id);
    },


    computed: {
        person () {
            return this.$store.getters.person;
        },
    },
};
</script>

<style scoped>

</style>
