<div>
    <div class="mb-3">
        <Label for="" class="form-label">Nome</Label>
        <!-- isset é para validar se o campo é nulo -->
        <input 
            class="form-control" 
            type="text" 
            name="nome" 
            id="nome" 
            value="{{ isset($registro->nome) ? $registro->nome : ''}}"
            placeholder="Nome">
        @error('nome')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <Label for="" class="form-label">Apelido</Label>
        <!-- isset é para validar se o campo é nulo -->
        <input 
            class="form-control" 
            type="text" 
            name="apelido" 
            id="apelido" 
            value="{{ isset($registro->apelido) ? $registro->apelido : ''}}"
            placeholder="Apelido">
        @error('apelido')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <Label for="" class="form-label">Cidade</Label>
        <!-- isset é para validar se o campo é nulo -->
        <input 
            class="form-control" 
            type="text" 
            name="cidade" 
            id="cidade" 
            value="{{ isset($registro->cidade) ? $registro->cidade : ''}}"
            placeholder="Cidade">
        @error('cidade')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <Label for="" class="form-label">Bairro</Label>
        <!-- isset é para validar se o campo é nulo -->
        <input 
            class="form-control" 
            type="text" 
            name="bairro" 
            id="bairro" 
            value="{{ isset($registro->bairro) ? $registro->bairro : ''}}"
            placeholder="Bairro">
        @error('bairro')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <Label for="" class="form-label">CEP</Label>
        <!-- isset é para validar se o campo é nulo -->
        <input 
            class="form-control" 
            type="text" 
            name="cep" 
            id="cep" 
            value="{{ isset($registro->cep) ? $registro->cep : ''}}"
            placeholder="CEP">
        @error('cep')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <Label for="" class="form-label">E-mail</Label>
        <!-- isset é para validar se o campo é nulo -->
        <input 
            class="form-control" 
            type="text" 
            name="email" 
            id="email" 
            value="{{ isset($registro->email) ? $registro->email : ''}}"
            placeholder="Email">
        @error('email')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <Label for="" class="form-label">Telefone</Label>
        <!-- isset é para validar se o campo é nulo -->
        <input 
            class="form-control" 
            type="text" 
            name="telefone" 
            id="telefone" 
            value="{{ isset($registro->telefone) ? $registro->telefone : ''}}"
            placeholder="Telefone">
        @error('telefone')
        <span>
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<!-- <pre>
    {{ print_r($errors) }}
</pre> -->