@extends("layouts.app_form")

@section("title")
    {{ ucfirst("role") }}
@endsection

@section("index")
    {{ route("role.index") }}
@endsection

@section("breadcrumb")
    @include("components.breadcrumb3")
@endsection

@section("form")
    <form action="{{ route("role.update", $data->id) }}" method="POST">
        @csrf @method("PUT")
        @include("components.input1", [
            "name"          => "name",
            "type"          => "text",
            "value"         => $data->name,
            "placeholder"   => "Enter name ...",
            "modifier"      => "required autofocus",
        ])
        <button type="submit" class="btn btn-primary">{{ ucfirst("submit") }}</button>
    </form>
@endsection
