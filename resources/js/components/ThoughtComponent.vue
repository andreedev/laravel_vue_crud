<template>
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <form action="">
                    <div class="card-header">Publicado en {{ thought.created_at }}</div>
                    <div class="card-body">{{ thought.description }}</div>
                    <div class="card-footer">
                        <button class="btn btn-secondary">Editar</button>
                        <button type="submit" class="btn btn-info">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        props: ['thought'],
        data(){
            return {
            };
        },
        components:{
        }
    }
</script>