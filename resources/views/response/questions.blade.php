<p>
    Aqui vai exibir a pergunta, ao selecionar a opção de resposa deve requisitar por ajax salvar a resposta,
    e save vai retornar a rota que deve ser redirecionada a tela.
</p>

<p>exemplo do código para usar o Ajax </p>

<pre>
    let successCallback = (response) => {
        // fazer oq quero com a resposa quando deu certo
    }

    let errorCallback = (response) => {
        // fazer oq quero com a resposa quando deu errado
    }

    let anyCallback = (response) => {
        // fazer oq quero com a resposa indenpendente de deu certo ou errado
    }

    let data = {
        /* valor que vai mandar para salvar */
    }

    let ajax = new Ajax('{{ route("response.ajax.question") }}');

    ajax.setSuccess(successCallback)
        .setError(errorCallback)
        .setAny(anyCallback)
        .setData(data)
        run(/* se não quiser usar o setData pode passar aqui dentro o valor para enviar */);
</pre>