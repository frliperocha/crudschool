<template>
    <div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <criar  @new="addAluno"></criar>
            </div>
         </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Alunos</div>

                <div class="panel-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Nome do Aluno</th>
                            <th scope="col">Nome da mãe</th>
                            <th scope="col">Série</th>
                            <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <alunos v-for="(criado,index) in criados"
                         :key="criado.id" 
                         :criado="criado"
                         @update="updAluno(index, ...arguments)" 
                         @delete="delAluno (index)">
                         </alunos>
                    </table>
                </div>

            </div>
        </div>
        </div>
    </div>

</template>

<script>
    export default {
        data () {
            return {
                criados: [{
                    'id': 1,
                    'nome_aluno': 'Anne',
                    'nome_mae': 'Sarah',
                    'serie_ingresso': '9º ano',
                }]
            }
        },

        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            addAluno(criado) {
                this.criados.push(criado);
            },
            updAluno(index, criado){
                this.criados[index] = criado;
            },
            delAluno(index){
                this.criados.splice(index, 1);
            }
        }
    }
</script>
