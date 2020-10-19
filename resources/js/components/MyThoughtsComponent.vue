<template>
    <div>
        <form-component @new="addThought"></form-component>
        <thought-component 
            v-for="thought in thoughts" 
            :key="thought.id" 
            :thought="thought">
        </thought-component>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                thoughts: [{
                    'id': 1,
                    'description': 'lorem',
                    'created_at': '18/08/2020',
                }]
            }
        },
        mounted() {
            console.log('Component mounted');
        },
        methods: {
            addThought(thought){
                this.thoughts.push(thought);
            }
        },
    }
</script>