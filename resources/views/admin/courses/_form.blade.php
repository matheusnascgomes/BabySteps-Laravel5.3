<div class="row">
  <div class="input-field col s12">
    <input id="title" type="text" name="title" value="{{ isset($registers->title) ? $registers->title : ''}}">
    <label for="title">Título</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <input id="description" type="text" name="description" value="{{ isset($registers->description) ? $registers->description : ''}}">
    <label for="description">Descrição</label>
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <input id="value" type="text" name="value" value="{{ isset($registers->value) ? $registers->value : ''}}">
    <label for="value">Valor</label>
  </div>
</div>

<div class="file-field input-field">
  <div class="btn">
    <span>Image</span>
    <input type="file" name=image>
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
@if(isset($registers->image))
<div class="input-field">
  <img width="150" src="{{ asset($registers->image) }}" alt="{{ $registers->title }}">
</div>
@endif

<p>
  <input type="checkbox" id="published" name="published" {{ isset($registers->published) && $registers->published == 'sim' ? 'checked' : ''  }} />
  <label for="published">Publicar?</label>
</p>
