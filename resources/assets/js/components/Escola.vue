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
                        <alunos v-for="(escola,index) in escolas"
                         :key="escola.id" 
                         :escola="escola"
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
                escolas: []
            }
        },

        mounted() {
            axios.get('/escolas').then((response) => {
                this.escolas = response.data;
            });
        },
        methods: {
            addAluno(escola) {
                this.escolas.push(escola);
            },
            updAluno(index, escola){
                this.escolas[index] = escola;
            },
            delAluno(index){
                this.escolas.splice(index, 1);
            }
        }
    }
</script>
