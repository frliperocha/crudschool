<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <criar></criar>
            
            <alunos v-for="alunos in alunoss" :key="alunos.id" :alunos="alunos"></alunos>

        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                alunoss: [{
                    'id': 1,
                    'nome_aluno': 'Anne',
                    'nome_mae': 'Sarah',
                    'serie': '9º'
                }]
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
