@extends('cms::templates.default')

@section('layout')


	{{ Pongo::showAlert() }}

	<div class="section" id="login">

		<div class="login-wrapper">

			<h1>Pongo<span>CMS</span> <small>v2</small></h1>

			{{ Form::open(array('route' => 'api.login')) }}
				
				{{ Form::hidden('section', 'login') }}

				<div class="form-group" rel="username">

					{{ Form::label('username', t('label.login.form.username')) }}

					<div class="input-group">

						{{ Form::text('username', null, array('class' => 'form-control', 'autocorrect' => 'off', 'autocapitalize' => 'off', 'placeholder' => t('placeholder.login.username'))) }}

						<span class="input-group-btn">
					
							<span class="flag remember">
								<label for="remember">
									{{ Form::checkbox('remember', 1, false, array('id' => 'remember')) }}
									<strong></strong>
								</label>
							</span>

						</span>

					</div>

				</div>

				<div class="form-group" rel="password">

					{{ Form::label('password', t('label.login.form.password')) }}

					{{ Form::password('password', array('class' => 'form-control', 'placeholder' => t('placeholder.login.password'))) }}

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-btn">

							

						</span>

					</div>

				</div>

				<div class="form-group">

					<button type="button" class="pongo-ajax-submit pongo-loading btn btn-primary btn-block">{{t('form.button.login')}}</button>

				</div>

			{{ Form::close() }}

			<footer>PongoCMS v2.0.0 &copy; Pongoweb.it</footer>

		</div>

	</div>
	
@stop

@section('footer-js')
	{{Render::asset('js/sections/login.js')}}
@stop