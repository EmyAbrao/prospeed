@extends('layouts/layoutMaster')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Editar Perfil
</h4>

    <div class="row">
        @include('profile.partials.update-profile-information-form')
        @include('profile.partials.update-password-form')
        {{-- @include('profile.partials.delete-user-form') --}}
    </div>
@endsection