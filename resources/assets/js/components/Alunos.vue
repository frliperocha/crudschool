<template>
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
                        <tbody>
                            <tr>
                            <td>{{ alunos.nome_aluno }}</td>
                            <td>{{ alunos.nome_mae }}</td>
                            <td>{{ alunos.serie }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Ver</button>
                                <button type="button" class="btn btn-success btn-sm">Editar</button>
                                <button type="button" class="btn btn-danger btn-sm">Remover</button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                   
                </div>
            </div>
</template>

<script>
    export default {
        props: ['alunos'],
        data() {
            return {
                alunos: {
                    id: '',
                    nome_aluno: '',
                    nome_mae: '',
                    serie: '',
                }
            };
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
