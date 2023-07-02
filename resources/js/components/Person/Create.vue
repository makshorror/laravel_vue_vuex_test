<template>
    <div class="w-50 mx-auto">
        <div class="mb-3">
            <label
                for="name"
                class="form-label"
            >Имя</label>
            <input
                type="text"
                class="form-control"
                id="name"
                v-model="name"
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
                v-model="age"
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
                v-model="job"
                placeholder="Введите профессию..."
            >
        </div>
        <div class="mb-3">
            <input
                @click.prevent="$store.dispatch('store', {
            name: this.name,
            age: this.age,
            job: this.job,
        })"
                type="submit"
                value="Создать"
                class="btn btn-success"
                :disabled="!isDisabled"
            >
        </div>
    </div>
</template>

<script>
export default {
    name: "Create",

    data () {
        return {
            name: "",
            age: null,
            job: "",
        };
    },

    methods: {},

    computed: {
        isDisabled () {
            return this.name && this.age && this.job;
        },
    },
};
</script>

<style scoped>

</style>
