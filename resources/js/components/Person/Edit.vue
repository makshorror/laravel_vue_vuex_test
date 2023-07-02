<template>
    <div class="w-50 mx-auto" v-if="person">
        <div class="mb-3">
            <label
                for="name"
                class="form-label"
            >Имя</label>
            <input
                type="text"
                class="form-control"
                id="name"
                v-model="person.name"
                placeholder="Введите имя..."
            >
        </div>
        <div class="mb-3">
            <label
                for="age"
                class="form-label"
            >Возраст</label>
            <input
                type="number"
                class="form-control"
                id="age"
                v-model="person.age"
                placeholder="Ваш возраст..."
            >
        </div>
        <div class="mb-3">
            <label
                for="job"
                class="form-label"
            >Профессия</label>
            <input
                type="text"
                class="form-control"
                id="job"
                v-model="person.job"
                placeholder="Введите профессию..."
            >
        </div>
        <div class="mb-3">
            <input
                @click.prevent="$store.dispatch('updatePerson', {id: person.id, name: person.name, age: person.age, job: person.job})"
                type="submit"
                value="Сохранить"
                class="btn btn-success"
                :disabled="!isDisabled"
            >
        </div>
    </div>
</template>

<script>
export default {
    name: "Edit",

    mounted () {
        this.$store.dispatch("getPerson", this.$route.params.id);
    },

    methods: {

    },

    computed: {
        isDisabled () {
            return this.person.name && this.person.age && this.person.job;
        },

        person () {
            return this.$store.getters.person;
        },
    },

};
</script>

<style scoped>

</style>
