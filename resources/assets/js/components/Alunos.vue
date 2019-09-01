<template>
            
                        <tbody>
                            
                            <tr>
                                <div v-if="editMode" class="panel-body">
                                    <form>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label>Nome completo do aluno</label>
                                                <input type="text" class="form-control" v-model="criado.nome_aluno">
                                            </div>
                                        
                                            <div class="form-group col-md-4">
                                                <label>Data de nascimento</label>
                                                <input type="date" class="form-control" v-model="criado.data_nascimento">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Série de Ingresso</label>
                                                <select class="form-control" v-model="criado.serie_ingresso">
                                                    <option selected>Escolher...</option>
                                                    <option>1º ano</option>
                                                    <option>2º ano</option>
                                                    <option>3º ano</option>
                                                    <option>4º ano</option>
                                                    <option>5º ano</option>
                                                    <option>6º ano</option>
                                                    <option>7º ano</option>
                                                    <option>8º ano</option>
                                                    <option>9º ano</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label>Rua</label>
                                                <input type="text" class="form-control" v-model="criado.rua">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label>Bairro</label>
                                                <input type="text" class="form-control" v-model="criado.bairro">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Número</label>
                                                <input type="number" class="form-control" v-model="criado.numero">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label>Complemento</label>
                                                <input type="text" class="form-control" v-model="criado.complemento">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Cidade</label>
                                                <input type="text" class="form-control" v-model="criado.cidade">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Estado</label>
                                                <select class="form-control" v-model="criado.estado">
                                                    <option selected>Escolher...</option>
                                                    <option>Acre</option>
                                                    <option>Alagoas</option>
                                                    <option>Amapá</option>
                                                    <option>Amazonas</option>
                                                    <option>Bahia</option>
                                                    <option>Ceará</option>
                                                    <option>Distrito Federal</option>
                                                    <option>Espírito Santo</option>
                                                    <option>Goiás</option>
                                                    <option>Maranhão</option>
                                                    <option>Mato Grosso</option>
                                                    <option>Mato Grosso do Sul</option>
                                                    <option>Minas Gerais</option>
                                                    <option>Pará</option>
                                                    <option>Paraíba</option>
                                                    <option>Paraná</option>
                                                    <option>Pernambuco</option>
                                                    <option>Piauí</option>
                                                    <option>Rio de Janeiro</option>
                                                    <option>Rio Grande do Sul</option>
                                                    <option>Rio Grande do Norte</option>
                                                    <option>Rondônia</option>
                                                    <option>Roraima</option>
                                                    <option>Santa Catarina</option>
                                                    <option>São Paulo</option>
                                                    <option>Sergipe</option>
                                                    <option>Tocantins</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>CEP</label>
                                                <input class="form-control" v-model="criado.cep">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label>Nome completo da mãe</label>
                                                <input type="text" class="form-control" v-model="criado.nome_mae">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>CPF da mãe</label>
                                                <input type="text" class="form-control" v-model="criado.cpf_mae">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Pagamento de mensalidade</label>
                                                <input type="date" class="form-control" v-model="criado.data_pagamento">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div v-else class="panel-body">
                                <td>{{ criado.nome_aluno }}</td>
                                </div>
                                <td>{{ criado.nome_mae }}</td>
                                <td>{{ criado.serie_ingresso }}</td>
                                
                                <td>
                                    <button type="button" class="btn btn-info btn-sm">Ver</button>
                                    <button v-if="editMode" type="button" class="btn btn-success btn-sm" v-on:click="updateAluno()">Salvar</button>
                                    <button v-else type="button" class="btn btn-primary btn-sm" v-on:click="editAluno()">Editar</button>
                                    <button type="button" class="btn btn-danger btn-sm" v-on:click="deleteAluno()">Remover</button>
                                </td>
                            </tr>
                        </tbody>

 
                   
</template>

<script>
    export default {
        props: ['criado'],
        data() {
            return {
                editMode: false
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            editAluno(){
                this.editMode = true;
            },
            updateAluno(){
                this.editMode = false;
                this.$emit('update', criado);
            },
            deleteAluno(){
                this.$emit('delete');
            }
        }
    }
</script>
