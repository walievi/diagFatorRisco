@extends('layouts.app')
@extends('general')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <form method="POST" action="{{ route('question.save', ['question' => 1]) }}">
                @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>Pergunta 1</h4>
                        </div>

                        <div>
                            <p>Você, um aventureiro corajoso, está explorando uma floresta misteriosa em busca de um tesouro lendário. De repente, você se depara com um pequeno elfo triste sentado em uma clareira. Ele olha para você com os olhos marejados de lágrimas.</p>
                        </div>

                        <!-- validar se possui imagem -->
                        <div> 
                            <img src="https://s2-g1.glbimg.com/aNpAYDaD6Q_-cciSMaHnsPWcYns=/0x0:800x450/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/1/A/Ob6AaqSGOqUjsuVchzSQ/harry-potter-and-the-chamber-of-secrets-photo1.jpg" class="card-img-top" alt="...">
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

                        <div class="modal-footer centralizar mt-5">
                            <button class="btn btn-custom" data-bs-dismiss="pergunta">Enviar resposta</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>







{{-- <div class="row justify-content-center">
    <div class="col-md-10 mt-5">
        <form method="POST" action="{{ route('question.save', ['question' => 1]) }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <h4>Pergunta 1</h4>
                    </div>

                    <div>
                        <p>Você, um aventureiro corajoso, está explorando uma floresta misteriosa em busca de um tesouro lendário. De repente, você se depara com um pequeno elfo triste sentado em uma clareira. Ele olha para você com os olhos marejados de lágrimas.</p>
                    </div>

                    <!-- validar se possui imagem -->
                    <div> 
                        <img src="https://s2-g1.glbimg.com/aNpAYDaD6Q_-cciSMaHnsPWcYns=/0x0:800x450/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/1/A/Ob6AaqSGOqUjsuVchzSQ/harry-potter-and-the-chamber-of-secrets-photo1.jpg" class="card-img-top" alt="...">
                    </div>

                    <!-- validar se possui vídeo e necessário copiar aquele incorporar para apresentar o vídeo -->
                    <!-- <div class="col-lg-12">
                        <iframe width="750" height="515" src="https://www.youtube.com/embed/VPtcAtAuuQE?si=CrIX2-SdTUoxSse8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div> -->

                    <div class="btn-group-vertical mt-5 centralizar" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
                        <label class="btn btn-outline-info" for="vbtn-radio1">A - "O que aconteceu? Posso ajudar de alguma forma?"</label>

                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                        <label class="btn btn-outline-info" for="vbtn-radio2">B - "Sorrir e acenar."</label>
                        
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                        <label class="btn btn-outline-info" for="vbtn-radio3">C - "Continuar explorando sem se preocupar com o elfo."</label>
                    </div>

                    <div class="modal-footer centralizar mt-5">
                        <button class="btn btn-custom" data-bs-dismiss="pergunta">Enviar resposta</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> --}}

