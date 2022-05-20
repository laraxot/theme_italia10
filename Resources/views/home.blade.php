@extends('pub_theme::layouts.app')

@section('content')

    <v-map></v-map>

@endsection
@push('scripts_before')
<script src="data/farmshopGeoJson.js"></script>
@endpush
