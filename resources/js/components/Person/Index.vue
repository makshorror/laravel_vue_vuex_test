<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th
                    scope="col"
                    class="w-25"
                ></th>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Профессия</th>
                <th
                    scope="col"
                    class="w-25"
                ></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in people">
                <td class="w-25">
                    <router-link
                        :to="{name: 'person.edit', params: {id: person.id}}"
                        class="btn btn-outline-primary"
                    >Редактировать
                    </router-link>
                </td>
                <td>
                    <router-link
                        :to="{name: 'person.show', params: {id: person.id}}"
                    >{{ person.name }}
                    </router-link>
                </td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td><input
                    type="submit"
                    value="Удалить"
                    class="btn btn-outline-danger"
                    @click.prevent="$store.dispatch('deletePeople', (person.id))"
                ></td>

            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",


    mounted () {
        this.$store.dispatch('getPeople')
    },

    methods: {

    },

    computed: {
        people(){
            return this.$store.getters.people
        }
    },
};
</script>

<style scoped>

</style>
