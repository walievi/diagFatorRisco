{{-- <p>
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
</pre> --}}

@extends('layouts.logged')

@section('page')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3 mb-5">
            <div class="card centralizar p-5">
                <form id="questionForm">
                @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>Pergunta 1</h4>
                        </div>

                        <div>
                            <p>{{ $question->first()->description }}</p>
                        </div>

                        <!-- validar se possui imagem -->
                        <div class="centralizar"> 
                            <img src="https://s2-g1.glbimg.com/aNpAYDaD6Q_-cciSMaHnsPWcYns=/0x0:800x450/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/1/A/Ob6AaqSGOqUjsuVchzSQ/harry-potter-and-the-chamber-of-secrets-photo1.jpg" class="card-img-top img-question" alt="...">
                        </div>

                        <!-- validar se possui vídeo e necessário copiar aquele incorporar para apresentar o vídeo -->
                        <!-- <div class="col-lg-12">
                            <iframe width="750" height="515" src="https://www.youtube.com/embed/VPtcAtAuuQE?si=CrIX2-SdTUoxSse8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div> -->

                        <div class="btn-group-vertical mt-5 centralizar" role="group" aria-label="Vertical radio toggle button group">
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
                            <label class="btn btn-outline-info mb-3" for="vbtn-radio1">A - "O que aconteceu? Posso ajudar de alguma forma?"</label>
                        
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                            <label class="btn btn-outline-info mb-3" for="vbtn-radio2">B - "Sorrir e acenar."</label>
                            
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                            <label class="btn btn-outline-info mb-3" for="vbtn-radio3">C - "Continuar explorando sem se preocupar com o elfo."</label>
                        </div>
                        

                        <div class="centralizar mt-3">
                            <button type="submit" class="btn btn-custom" data-bs-dismiss="pergunta">Enviar resposta</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

<script>
    var radioButtons = document.querySelectorAll('.btn-check');
    radioButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            if (this.checked) {
                var labelText = document.querySelector('label[for="' + this.id + '"]').innerText;
                console.log("Valor selecionado:", labelText);
            }
        });
    });
</script>
@endsection