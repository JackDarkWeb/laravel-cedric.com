@extends('layouts.default', ['title' => 'Nos contacts'])

@section('content')

    <section class="contact-us-section">
        <div style="background-color: rgba(0,0,0,0.8); padding-top: 200px;" class="pb-5 px-2">
            <div  class="container">
                <div class="row">
                    <div class="col-md-6 p-5 bg-light">
                        <div class="row"><h4 class="">Contactez-nous !</h4></div>
                        <div class="row"><h4 class="">
                                Nous sommes là pour vous aider !</h4></div>
                        <p class="row">Soumettez ce formulaire pour rejoindre notre équipe. Vous recevrez une réponse le prochain jour ouvrable.</p>


                        <div class="result"></div>
                        @if(session()->has('message'))
                            {!! session('message') !!}
                        @endif

                        <form method="post" class="row" action="{{route('contact.store')}}"  id="formContact">
                            @csrf
                            <div class="form-group col-12">
                                <label class="font-weight-bold row">Votre nom *</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <input type="text" name="first_name" class="form-control" id="first_name" value="{{old('first_name')}}" placeholder="Entez votre prénom">
                                            <span class="error-first_name" style="color: red; font-style: italic;">{{$errors->first('first_name')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <div class="row">
                                            <input type="text" name="last_name" class="form-control" id="last_name" value="{{old('last_name')}}" placeholder="Entez votre nom">
                                            <span class="error-last_name" style="color: red; font-style: italic;">{{$errors->first('last_name')}}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <div class="row">
                                    <label for="entreprise" class="font-weight-bold">Votre entreprise</label>
                                    <input type="text" name="company" class="form-control" id="company" value="{{old('company')}}" placeholder="Votre entreprise">
                                    <span class="error-company" style="color: red; font-style: italic;">{{$errors->first('company')}}</span>
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <label class="font-weight-bold row">Votre adresse courriel *</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Saisissez un e-mail">
                                            <span class="error-email" style="color: red; font-style: italic;">{{$errors->first('email')}}</span>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <div class="row">
                                            <input type="email" name="confirm_email" class="form-control" id="confirm-email" value="{{old('confirm_email')}}" placeholder="Confirmez l’e-mail">
                                            <span class="error-confirm_email" style="color: red; font-style: italic;">{{$errors->first('confirm_email')}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="row">
                                    <label for="message" class="font-weight-bold">Votre message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="3" style="{{($errors->first('message')) ? "border-color : red" : ''}}"></textarea>
                                    <span class="error-message" style="color: red; font-style: italic;"></span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <button type="submit" name="submit" class="btn btn-primary w-100">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-1 d-none d-md-block">
                        <div class="row">
                            <div class="mx-auto">
                                <div class="" style="border: 2px solid #999999; height: 200px; margin-top: 150px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mx-auto">
                                <div class="my-4" style="padding: 10px; background-color: #00ace6; border-radius: 100px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mx-auto">
                                <div class="" style="border: 2px solid #999999; height: 200px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 bg-light p-5 mt-5 mt-md-0">
                        <div class="row">
                            <h4>Vous pouvez également nous joindre par ces moyens:</h4>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="row"><strong>Téléphone: </strong></p>

                                <p class="row">+1 3194716087</p>
                                <p class="row"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="row"><strong>Courriel: </strong></p>

                                <p class="row">contact@cedricagossou.com</p>
                            </div>
                        </div>

                        <!--<div class="row">
                            <div class="col-12">
                                <p class="row"><strong>Courrier: </strong></p>

                                <p class="row">---------------</p>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="{{asset('app/js/contact.js')}}"></script>

@stop
