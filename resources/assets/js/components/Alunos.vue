<template>
            
                        <tbody>
                            
                            <tr>
                                <div v-if="editMode" class="panel-body">
                                    <form>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label>Nome completo do aluno</label>
                                                <input type="text" class="form-control" v-model="escola.nome_aluno" required>
                                            </div>
                                        
                                            <div class="form-group col-md-4">
                                                <label>Data de nascimento</label>
                                                <input type="date" class="form-control" v-model="escola.data_nascimento" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Série de Ingresso</label>
                                                <select class="form-control" v-model="escola.serie_ingresso" required>
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
                                                <input type="text" class="form-control" v-model="escola.rua" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label>Bairro</label>
                                                <input type="text" class="form-control" v-model="escola.bairro" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Número</label>
                                                <input type="number" class="form-control" v-model="escola.numero" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label>Complemento</label>
                                                <input type="text" class="form-control" v-model="escola.complemento" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Cidade</label>
                                                <input type="text" class="form-control" v-model="escola.cidade" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Estado</label>
                                                <select class="form-control" v-model="escola.estado" required>
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
                                                <input class="form-control" pattern= "\d{5}-\d{3}" title="Digite um CEP no formato: xxxxx-xxx" v-model="escola.cep" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label>Nome completo da mãe</label>
                                                <input type="text" class="form-control" v-model="escola.nome_mae" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>CPF da mãe</label>
                                                <input type="text" class="form-control" pattern="\d{3}\.\d{3}\.\d{3}-\d{2} " title="Digite um CPF no formato: xxx.xxx.xxx-xx"
                                                 v-model="escola.cpf_mae" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Pagamento de mensalidade</label>
                                                <input type="date" class="form-control" v-model="escola.data_pagamento" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div v-else class="panel-body">
                                <td>{{ escola.nome_aluno }}</td>
                                </div>
                                <td>{{ escola.nome_mae }}</td>
                                <td>{{ escola.serie_ingresso }}</td>
                                
                                <td>
                                    <!-- <button type="button" class="btn btn-info btn-sm">Ver</button> -->
                                    <button v-if="editMode" type="button" class="btn btn-success btn" v-on:click="updateAluno()"><i class="fas fa-edit"></i></button>
                                    <button v-else type="button" class="btn btn-primary btn" v-on:click="editAluno()"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn" v-on:click="deleteAluno()"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>

 
                   
</template>

<script>
    export default {
        props: ['escola'],
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
                deleteAluno(){
                    axios.delete(`/escolas/${this.escola.id}`).then(() => {
                    this.$emit('delete');
                });
            },

            updateAluno(){
                const params = {
                    nome_aluno: this.escola.nome_aluno,
                    data_nascimento: this.escola.data_nascimento,
                    serie_ingresso: this.escola.serie_ingresso,
                    rua: this.escola.rua,
                    bairro: this.escola.bairro,
                    numero: this.escola.numero,
                    complemento: this.escola.complemento,
                    cidade: this.escola.cidade,
                    estado: this.escola.estado,
                    cep: this.escola.cep,
                    nome_mae: this.escola.nome_mae,
                    cpf_mae: this.escola.cpf_mae,
                    data_pagamento: this.escola.data_pagamento
                };
                axios.put(`/escolas/${this.escola.id}`, params).then((response) => {
                    this.editMode = false;
                    const escola = response.data;
                    this.$emit('update', escola);
                });
            }
        }
    }
</script>
