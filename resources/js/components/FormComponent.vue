<template>
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <form action="" v-on:submit.prevent="newThought()">
                    <div class="card-header">¿En qué estás pensando?</div>
                    <div class="card-body">
                        <label>Ahora estoy pensando en:</label>
                        <input type="text" class="form-control" name="thought" v-model="description">
                        <div class="text-center">
                            <button class="btn btn-primary mt-3" type="submit">Enviar pensamiento</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                description: ''
            }
        },
        mounted() {
            console.log('Component mounted');
        },
        methods:{
            newThought(){
                const params = {
                    description: this.description
                };
                this.description = '';
                axios.post('/thoughts', params).then((response) => {
                    const thought = response.data;
                    this.$emit('new', thought);
                });
            }
        }
    }
</script>