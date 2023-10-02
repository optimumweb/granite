<form
    id="form-{{ $form->id }}"
    class="form"
    action="{{ $form->action }}"
    method="{{ $form->method }}"
    enctype="multipart/form-data"
>
    @csrf

    @if (session()->has('success'))
        <p class="notification is-success">
            {!! session()->get('success') !!}
        </p>
    @endif

    @isset($errors)
        @foreach($errors->all() as $message)
            <p class="notification is-danger">
                {!! $message !!}
            </p>
        @endforeach
    @endisset

    <div class="columns is-multiline">
        @foreach ($form->fields as $field)
            <div class="column is-{{ $field->columns }}">
                {!! $field !!}
            </div>
        @endforeach
    </div>

    <button
        class="button is-success"
        type="submit"
    >
        {{ site()->trans('forms.submit') }}
    </button>
</form>
