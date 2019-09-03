<template>
    <div class="panel panel-default">
        <div class="panel-heading">Cadastro</div>
            <div class="panel-body">

                <form action="" v-on:submit.prevent="novoCadastro()">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="nomeCompleto">Nome completo do aluno</label>
                            <input type="text" class="form-control" id="nomeCompleto" v-model="nome_aluno">
                        </div>
                    
                        <div class="form-group col-md-4">
                            <label for="dataNascimento">Data de nascimento</label>
                            <input type="date" class="form-control" id="dateNascimento" v-model="data_nascimento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="serieIngresso">Série de Ingresso</label>
                            <select id="serieIngresso" class="form-control" v-model="serie_ingresso">
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
                            <label for="enderecoRua">Rua</label>
                            <input type="text" class="form-control" id="enderecoRua" v-model="rua">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="enderecoBairro">Bairro</label>
                            <input type="text" class="form-control" id="enderecoBairro" v-model="bairro">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="enderecoNumero">Número</label>
                            <input type="number" class="form-control" id="enderecoNumero" v-model="numero">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="enderecoCompl">Complemento</label>
                            <input type="text" class="form-control" id="enderecoCompl" v-model="complemento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="enderecoCidade">Cidade</label>
                            <input type="text" class="form-control" id="enderecoCidade" v-model="cidade">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="enderecoEstado">Estado</label>
                            <select id="enderecoEstado" class="form-control" v-model="estado">
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
                            <label for="enderecoCEP">CEP</label>
                            <input class="form-control" id="enderecoCEP" v-model="cep">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="nomeMae">Nome completo da mãe</label>
                            <input type="text" class="form-control" id="nomeMae" v-model="nome_mae">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cpfMae">CPF da mãe</label>
                            <input type="text" class="form-control" id="cpfMae" v-model="cpf_mae">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="dataPagamento">Pagamento de mensalidade</label>
                            <input type="date" class="form-control" id="dataPagamento" v-model="data_pagamento">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Criar cadastro</button>
                </form>

            </div> 
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                nome_aluno: '',
                data_nascimento: '',
                serie_ingresso: '',
                rua: '',
                bairro: '',
                numero: '',
                complemento: '',
                cidade: '',
                estado: '',
                cep: '',
                nome_mae: '',
                cpf_mae: '',
                data_pagamento: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            novoCadastro() {
                const params = {
                    nome_aluno: this.nome_aluno,
                    data_nascimento: this.data_nascimento,
                    serie_ingresso: this.serie_ingresso,
                    rua: this.rua,
                    bairro: this.bairro,
                    numero: this.numero,
                    complemento: this.complemento,
                    cidade: this.cidade,
                    estado: this.estado,
                    cep: this.cep,
                    nome_mae: this.nome_mae,
                    cpf_mae: this.cpf_mae,
                    data_pagamento: this.data_pagamento
                };
                
                axios.post(`/escolas`, params)
                    .then((response) => {
                        const escola = response.data;
                        this.$emit('new', escola);
                    });
                
                
            }
        }
    }
</script>
