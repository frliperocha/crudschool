<template>
    <div class="panel panel-default">
        <div class="panel-heading">Cadastro</div>
            <div class="panel-body">

                <form action="">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name">
                        <label for="age">Data de nascimento</label>
                        <input type="date" class="form-control" name="date">
                        <label for="serie">Série de Ingresso</label>
                        <select class="form-control" v-model="selected">
                            <option disabled value="">Escolha um item</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                        <label for="complement">Complemento</label>
                        <input type="text" class="form-control" name="complement">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado">
                        <label for="cep">CEP</label>
                        <input type="number" class="form-control" name="cep">
                        <label for="mother">Nome da mãe</label>
                        <input type="text" class="form-control" name="mother">
                        <label for="cpf">CPF da mãe</label>
                        <input type="number" class="form-control" name="cpf">
                        <label for="data_pagamento">Data para pagamento</label>
                        <input type="date" class="form-control" name="data_pagamento">
                        <br>
                        <button type="submit" class="btn btn-primary">Criar cadastro</button>
                                 
                    </div>
                </form>
                
            </div> 
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
