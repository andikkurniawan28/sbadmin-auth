@extends("layouts.app_form")

@section("title")
    {{ ucfirst("role") }}
@endsection

@section("index")
    {{ route("role.index") }}
@endsection

@section("breadcrumb")
    @include("components.breadcrumb2")
@endsection

@section("form")
    <form action="{{ route("role.store") }}" method="POST">
        @csrf @method("POST")
        @include("components.input1", [
            "name"          => "name",
            "type"          => "text",
            "value"         => NULL,
            "placeholder"   => "Enter name ...",
            "modifier"      => "required autofocus",
        ])
        <button type="submit" class="btn btn-primary">{{ ucfirst("submit") }}</button>
    </form>
@endsection
