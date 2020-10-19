<template>
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <!-- <form action=""> -->
                    <div class="card-header">Publicado en {{ thought.created_at }}</div>
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
                this.$emit('delete');
            },
            onClickEdit(){
                this.editMode = true;
            },
            onClickUpdate(){
                this.editMode = false;
                this.$emit('update', this.thought);
            }
        }
    }
</script>