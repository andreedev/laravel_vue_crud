<template>
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <!-- <form action=""> -->
                    <div class="card-header">
                        Publicado en {{ thought.created_at }}
                        <div v-if="thought.created_at==thought.updated_at"> - Última actualización: {{ thought.updated_at }}</div>
                    </div>
                    <div class="card-body">
                        <p v-if="!editMode">{{ thought.description }}</p>
                        <input v-else class="form-control" v-model="thought.description">
                    </div>
                    <div class="card-footer">
                        <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">
                            Guardar cambios
                        </button>
                        <button v-else class="btn btn-secondary" v-on:click="onClickEdit()">
                            Editar
                        </button>
                        <button type="submit" class="btn btn-info" v-on:click="onClickDelete()">
                            Eliminar
                        </button>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        props: ['thought'],
        data(){
            return {
                editMode: false
            };
        },
        methods:{
            onClickDelete(){
                axios.delete(`/thoughts/${this.thought.id}`).then(()=>{
                    this.$emit('delete');
                });
            },
            onClickEdit(){
                this.editMode = true;
            },
            onClickUpdate(){
                const params = {
                    description: this.thought.description
                };
                axios.put(`/thoughts/${this.thought.id}`, params).then((response)=>{
                    this.editMode = false;
                    const thought = response.data;
                    this.$emit('update', this.thought);
                });
            }
        }
    }
</script>